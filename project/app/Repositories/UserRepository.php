<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository
{

    public function entity()
    {
        return User::class;
    }

    /**
     * Return user history session including score and date
     * @param $userId
     * @return array
     */
    public function getUserHistory($userId)
    {

        $results = DB::select(
            DB::raw("
                                SELECT
                                    scores.session_id session_id,
                                    SUM( scores.score ) score,
                                    sessions.created_at created_at
                                FROM
                                    scores
                                LEFT JOIN sessions ON
                                    sessions.id = scores.session_id
                                LEFT JOIN users ON
                                    users.id = sessions.user_id
                                WHERE
                                    users.id = :userId	
                                GROUP BY
                                    scores.session_id
                                "),
            array('userId' => $userId,)
        );
        return $results;
    }

    /**
     * Return user recent session trained categories
     * @param $userId
     * @return array
     */
    public function getUserRecentTrained($userId)
    {

        $results = DB::select(
            DB::raw("
                                SELECT
                                    categories.name
                                FROM
                                    sessions
                                LEFT JOIN session_exercises ON
                                    sessions.id = session_exercises.session_id
                                LEFT JOIN exercises ON
                                    exercises.id = session_exercises.exercise_id
                                LEFT JOIN categories ON
                                    categories.id = exercises.category_id
                                WHERE
                                    sessions.user_id = :userId
                                    AND sessions.id IN(
                                        SELECT
                                            MAX( sessions.id )
                                        FROM
                                            sessions
                                        WHERE
                                            sessions.user_id = :userId2
                                    )
                                "),
            array('userId' => $userId, 'userId2' => $userId)
        );
        return $results;
    }
}

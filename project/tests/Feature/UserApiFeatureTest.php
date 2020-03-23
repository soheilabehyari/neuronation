<?php


class UserApiFeatureTest extends TestCase
{

    /**
     * /api/v1/user/history/id [GET]
     */
    public function testShouldReturnUserSessionHistory()
    {
        $this->get("api/v1/user/history/1", []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'data' => ['*' =>
                [
                    'session',
                    'score',
                    'date'
                ]
            ],
        ]);
    }

    /**
     * /api/v1/user/recent-trained/id [GET]
     */
    public function testShouldReturnUserRecentTrained()
    {
        $this->get("api/v1/user/recent-trained/1", []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure(['*' =>
            [
                'name'
            ]
        ]);
    }
}

<?php


trait ViewHelpers {
    
    protected function see($message,$scope='body')
    {       
        $this->assertCount(
            1,
            $this->client->getCrawler()->filter("{$scope}:contains('{$message}')"),
            'Did not see message : ' . $message
        );
    }


    protected function notSee($message,$scope='body')
    {

        $this->assertCount(
            1,
            $this->client->getCrawler()->filter("{$scope}:contains('{$message}'"),
            'Did not expect to see message :' . $message 
        );

    }
}
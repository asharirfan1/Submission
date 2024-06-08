<?php

use Tests\RequestFactories\SubmissionRequestFactory;

it('stores submission' , function (){
    SubmissionRequestFactory::new()->fake();
    $response = $this->postJson(route('submission.store'));
    $response->assertStatus(200)->assertOk();
});

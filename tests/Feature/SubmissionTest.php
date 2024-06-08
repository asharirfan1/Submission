<?php

use Tests\RequestFactories\SubmissionRequestFactory;

test('stores submission', function () {
    SubmissionRequestFactory::new()->fake();
    $response = $this->postJson(route('submission.store'));
    $response->assertStatus(200)->assertOk();
});

test('stores submission name is required', function () {
    SubmissionRequestFactory::new()->fake();
    $response = $this->postJson(route('submission.store') ,[
        'name' => ''
    ]);
    expect($response->json())->errors->toHaveCount(1)->toHaveKey('name');
    $response->assertStatus(422)->assertUnprocessable();
});

test('stores submission email is required', function () {
    SubmissionRequestFactory::new()->fake();
    $response = $this->postJson(route('submission.store') ,[
        'email' => ''
    ]);
    expect($response->json())->errors->toHaveCount(1)->toHaveKey('email');
    $response->assertStatus(422)->assertUnprocessable();
});

test('stores submission message is required', function () {
    SubmissionRequestFactory::new()->fake();
    $response = $this->postJson(route('submission.store') ,[
        'message' => ''
    ]);
    expect($response->json())->errors->toHaveCount(1)->toHaveKey('message');
    $response->assertStatus(422)->assertUnprocessable();
});






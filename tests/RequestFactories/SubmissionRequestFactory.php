<?php

namespace Tests\RequestFactories;

use Worksome\RequestFactories\RequestFactory;

class SubmissionRequestFactory extends RequestFactory
{
    public function definition(): array
    {
        return [
            'name' => 'john Doe',
            'email' => 'john.doe@example.com',
            'message' => $this->faker->text(),
        ];
    }
}

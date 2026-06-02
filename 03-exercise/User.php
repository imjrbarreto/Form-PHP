<?php

declare(strict_types=1);

class User {
  private string $firstName;
  private string $lastName;
  private int $age;

  public function __construct(string $firstName, string $lastName, int $age) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->age = $age;
  }

  public function __toString(): string {
    return "User: $this->firstName $this->lastName, Age: $this->age";
  }
}

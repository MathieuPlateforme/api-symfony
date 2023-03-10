<?php

namespace App\DataFixtures\Processor;

use Fidry\AliceDataFixtures\ProcessorInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;

final class UserProcessor implements ProcessorInterface
{
    public function __construct(private UserPasswordHasherInterface $userPasswordHasherInterface)
    {
    }

    /**
     * @inheritdoc
     */
    public function preProcess(string $fixtureId, $object): void
    {
        if (false === $object instanceof User) {
            return;
        }

        // $object->setPassword($this->userPasswordHasherInterface->hashPassword($object, $object->getPassword()));
    }

    /**
     * @inheritdoc
     */
    public function postProcess(string $fixtureId, $object): void
    {
        // do nothing
    }
}
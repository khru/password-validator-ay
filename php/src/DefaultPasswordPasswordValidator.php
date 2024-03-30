<?php declare(strict_types=1);

namespace Kata;

class DefaultPasswordPasswordValidator implements PasswordValidator
{
    /**
     * @var Rule[]
     */
    private array $validationRules;

    /**
     * @param Rule[] $rules
     */
    public function __construct(array $validationRules)
    {
        $this->validationRules = $validationRules;
    }

    public function isValid(string $password): bool
    {
        foreach ($this->validationRules as $validationRule) {
            if (!$validationRule->isValid($password)) {
                return false;
            }
        }

        return true;
    }

}

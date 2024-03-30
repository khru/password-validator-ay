<?php declare(strict_types=1);

namespace Kata;
class SecondPasswordPasswordValidator implements PasswordValidator
{
    /**
     * @var Rule[]
     */
    private array $validationRules;

    /**
     * @param Rule[] $rules
     */
    public function __construct(array $rules)
    {
        $this->validationRules = $rules;
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

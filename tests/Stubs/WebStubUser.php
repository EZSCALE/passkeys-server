<?php

declare(strict_types=1);

namespace Laravel\Passkeys\Tests\Stubs;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passkeys\Contracts\PasskeyUser;
use Laravel\Passkeys\PasskeyAuthenticatable;

class WebStubUser extends Model implements PasskeyUser
{
    use PasskeyAuthenticatable;

    protected $table = 'web_stub_users';

    public function getPasskeyGuard(): string
    {
        return 'web';
    }
}

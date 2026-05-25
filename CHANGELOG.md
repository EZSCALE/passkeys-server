# Changelog

All notable changes to this project will be documented in this file.

## EZSCALE Fork — Multi-Guard Support

This fork of `laravel/passkeys-server` adds multi-guard support for Laravel
applications that authenticate multiple user populations (e.g. an `admin`
guard alongside the default `web` guard). The fork preserves upstream's
wire format so the official `@laravel/passkeys` TypeScript client works
unmodified.

Configuration shape changes from a single `passkeys.guard` to a
`passkeys.guards.{name}` block. See `config/passkeys.php` for the new shape.

Maintained by [EZSCALE](https://github.com/EZSCALE) (Prophet731).

### 0.3.0-ezscale.1 — 2026-05-25

First multi-guard release. Forked from `laravel/passkeys-server@0.2.1`.

- `Passkeys::userModelFor($guard)`, `tableConnectionFor($guard)`, `redirectFor($guard)` static resolvers
- `Route::passkeys($guard, $opts)` macro for per-guard route registration
- Polymorphic `passkeys` schema via additive `make_passkeys_polymorphic` migration
- `PasskeyUser::getPasskeyGuard()` contract method (default impl in `PasskeyAuthenticatable` trait for single-guard back-compat)
- `PasskeyAuthenticatable` trait uses `morphMany`
- 5 actions accept `string $guard` parameter
- 5 controllers read `passkey_guard` from route defaults
- 123 tests / 285 assertions all green

No changes to upstream's wire format — the `@laravel/passkeys` TS client works unmodified.

## v0.2.1 - 2026-05-18

### What's Changed

* Omit null values from options by [@benbjurstrom](https://github.com/benbjurstrom) in https://github.com/laravel/passkeys-server/pull/24

**Full Changelog**: https://github.com/laravel/passkeys-server/compare/v0.2.0...v0.2.1

## v0.2.0 - 2026-05-14

### What's Changed

* Configurable passkey management middleware  by [@benbjurstrom](https://github.com/benbjurstrom) in https://github.com/laravel/passkeys-server/pull/16
* Add database transaction and pessimistic locking to passkey verification by [@joetannenbaum](https://github.com/joetannenbaum) in https://github.com/laravel/passkeys-server/pull/15
* Pin GitHub Actions to commit SHAs and add Dependabot config by [@joetannenbaum](https://github.com/joetannenbaum) in https://github.com/laravel/passkeys-server/pull/21
* Webauthn-lib v5.3 upgrade by [@eshimischi](https://github.com/eshimischi) in https://github.com/laravel/passkeys-server/pull/20
* Fix custom passkey model route bindings by [@benbjurstrom](https://github.com/benbjurstrom) in https://github.com/laravel/passkeys-server/pull/14
* Fix passkey user relation with custom user keys by [@benbjurstrom](https://github.com/benbjurstrom) in https://github.com/laravel/passkeys-server/pull/23

### New Contributors

* [@eshimischi](https://github.com/eshimischi) made their first contribution in https://github.com/laravel/passkeys-server/pull/20

**Full Changelog**: https://github.com/laravel/passkeys-server/compare/v0.1.0...v0.2.0

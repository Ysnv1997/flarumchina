# Changelog

## [0.1.0-beta.9](https://github.com/flarum/flags/compare/v0.1.0-beta.8.1...v0.1.0-beta.9)

### Changed
- Replace event subscribers (that resolve services too early) with listeners ([2f3417b](https://github.com/flarum/flags/commit/2f3417b863793b918d64c51bcdd65a77e05ffdb9))
- Compatibility with Laravel 5.7 ([bd00270](https://github.com/flarum/flags/commit/bd002708c57b5297b1796233d04d18876523ae49))

### Fixed
- API serialization failed when posts for a discussion were not loaded and needed ([9803914](https://github.com/flarum/flags/commit/98039144984eab4e43be7316ecc29fc56959b2c3))

## [0.1.0-beta.8.1](https://github.com/flarum/flags/compare/v0.1.0-beta.8...v0.1.0-beta.8.1)

### Fixed
- Fix dropping foreign keys in `down` migrations ([e17bd03](https://github.com/flarum/flags/commit/e17bd037b011aac6ef3e38a44ab859a25cd1f763))

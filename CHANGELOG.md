# Changelog

## 2.4.7-alpha - unreleased

This is an alpha version! The changes listed here are not final.

### Added
- Created a changelog from the git history with help from [auto-changelog](https://www.npmjs.com/package/auto-changelog). It could probably use cleanup!

### Changed
- Improve release instructions
- Remove composer dev-monorepo hack.
- update colors to match upcoming WP 5.7 color changes
- Update package dependencies.

## 2.4.6 - 2021-02-08

- Prevents updating stable version of Jetpack when using beta plugin in Docker instance.
- Fixes some errant copy appearing in the beta plugin welcome message.
- Sets the JETPACK_AUTOLOAD_DEV constant to true when a development version of Jetpack is activated.

## 2.4.5 - 2021-01-25

- Resolves a conflict between stable and beta Jetpack versions with the autoloader.

## 2.4.4 - 2021-01-05

- Avoids PHP notice for an unset array key if an option is not set.
- Updates the color to match the latest per the [Jetpack color guidelines](https://color-studio.blog).

## 2.4.3 - 2020-04-01

- Avoid Fatal errors when switching between branches that might be at different base version of the code.

## 2.4.2 - 2020-01-21

- Avoid Fatal errors; when Jetpack's vendor directory cannot be found, do not attempt to update.

# Changelog

## 3.0.0-alpha - unreleased

This is an alpha version! The changes listed here are not final.

### Added
- Added support for more than just the Jetpack plugin. This involved a major internal code restructuring.
- Created a changelog from the git history with help from [auto-changelog](https://www.npmjs.com/package/auto-changelog). It could probably use cleanup!
- Provide a soft failure if activating an unbuilt development version of the Beta plugin
- Testing Tips: Add tips to help testers get started.

### Changed
- Enable autotagger and update release instructions.
- Improve release instructions
- Load markdown library from either a dev or stable version of Jetpack.
- Remove composer dev-monorepo hack.
- Reorganized the code. Most notably, all the classes were renamed. The user interfaces remain the same, though.
- update colors to match upcoming WP 5.7 color changes
- Updated package dependencies.
- Update package dependencies.

### Removed
- Remove the jetpack_autoload_dev option and the JETPACK_AUTOLOAD_DEV constant update

### Fixed
- Fix autoloader issue in prodution build

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

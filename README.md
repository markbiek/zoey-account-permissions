# zoey-account-permissions

This is a composer package which provides simple ACL functionality with the following goals in mind:

- Defines roles
- Each role has a set of permissions which can be expanded by adding to the database
- Accounts can be assigned a single role
- Admin role accounts can access everything
- Other roles are limited in which products can be viewed

## Architecture

I made the choice to set this up as a standalone package so it would be decoupled from the application using it. All the main application needs is an Accounts model and the corresponding table. [^1]

The package uses Phinx database migrations and assumes the host application is doing the same. When the host application runs its migrations, the package adds the additional tables and fields needed for Roles and Permissions. The package also exposes seeders with default roles & permissions but using these is not required.

[^1]: This how Laravel handles many of its underlying functionality such as User authentication.

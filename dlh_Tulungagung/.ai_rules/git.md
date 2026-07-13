# Git AI Rules

## Purpose

This document defines the mandatory Git workflow for the DLH Tulungagung Website Re-Engineering Project.

These rules override the default behavior of any AI coding assistant.

---

# Repository Safety

The AI MUST protect the integrity of the Git repository.

The AI MUST NEVER perform destructive Git operations.

---

# Allowed Actions

The AI MAY:

- Create new files when requested.
- Modify existing files related to the task.
- Update documentation.
- Generate commit message suggestions.

---

# Forbidden Actions

The AI MUST NEVER:

- Initialize a new Git repository.
- Delete the Git repository.
- Change the default branch.
- Rename branches.
- Rewrite Git history.
- Force push.
- Force pull.
- Perform rebase without explicit instruction.
- Reset commits.
- Revert commits.
- Cherry-pick commits.
- Create tags.
- Create releases.

---

# Repository Files

The AI MUST NOT modify:

- .git/
- .gitignore
- .gitattributes

unless explicitly requested.

---

# Dependency Lock Files

The AI MUST NOT modify:

- composer.lock
- package-lock.json
- yarn.lock
- pnpm-lock.yaml

unless the user explicitly requests dependency updates.

---

# Environment Files

The AI MUST NEVER:

- Create production credentials.
- Modify existing secrets.
- Expose environment variables.

The AI MUST NOT modify:

- .env
- .env.production
- .env.local

unless explicitly requested.

---

# Commit Messages

When generating commit messages, the AI MUST use clear and descriptive language.

Recommended format:

- feat:
- fix:
- refactor:
- docs:
- style:
- test:
- chore:

Example:

feat: implement news management module

---

# File Changes

The AI MUST:

- Modify only relevant files.
- Preserve existing formatting.
- Avoid unnecessary file changes.

The AI MUST NOT reformat unrelated files.

---

# Code Ownership

The AI MUST respect the existing project structure.

The AI MUST NOT rename or relocate files without explicit approval.

---

# Generated Files

The AI MUST NOT commit:

- Temporary files
- Cache files
- Log files
- Build artifacts
- IDE configuration files

unless explicitly required.

---

# Documentation

Whenever architecture or workflow changes are made, the AI SHOULD update the relevant documentation.

Documentation MUST remain synchronized with the implementation.

---

# AI Restrictions

The AI MUST NEVER:

- Execute Git commands automatically.
- Assume permission to commit.
- Assume permission to push.
- Assume permission to merge.
- Assume permission to delete branches.

Git operations remain under user control.

---

# Final Rule

The AI is responsible only for generating code and recommendations.

Repository management, commits, merges, and deployments are always controlled by the project owner.
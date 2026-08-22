# ADR 0003: Decoupling Active Runtime Rules from Passive Docs

**Status:** Accepted  
**Date:** 2026-07-21  

---

## 1. Context
Merging active LLM prompt rules (.ai_rules/) into static markdown manuals (docs/) caused context clutter and token inflation for AI Coding Agents.

## 2. Decision
Maintain .ai_rules/ as an independent runtime instruction system injected directly into LLM prompts, while docs/ serves as static reference architecture.

## 3. Consequences
- Prevents context pollution.
- Optimizes AI context window consumption.

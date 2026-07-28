Database Architecture
DLH Tulungagung Website Re-Engineering
1. Database Design Philosophy

The database is designed using a modular relational architecture to support long-term maintainability, scalability, and flexibility.

The previous website relied heavily on WordPress, where content and metadata were mixed inside generic tables (wp_posts, wp_postmeta, etc.). This re-engineered system replaces that structure with a normalized relational database where each business domain has its own dedicated entity.

The database follows:

Third Normal Form (3NF)
Referential Integrity
Foreign Key Constraints
Soft Delete Support
Timestamp Tracking
Modular Entity Separation
High Query Performance
API Ready Architecture
2. Database Overview

The entire database consists of several independent modules.

Authentication
│
├── Users
├── Roles
└── Permissions


Organization
│
├── Departments
├── Officials
├── Organizational Structure
└── Employee Profiles


Content Management
│
├── Categories
├── News
├── Pages
├── Publications
├── Galleries
├── Videos
├── Announcements
└── Banners


Environmental Information
│
├── Programs
├── Services
├── Environmental Data
├── Documents
├── Regulations
├── Downloads
└── Statistics


Public Service
│
├── Complaints
├── Contact Messages
├── FAQ
├── PPID Requests
└── Feedback


Website Management
│
├── Menus
├── Menu Items
├── Settings
├── Social Media
├── Visitor Logs
└── Activity Logs
3. Entity Relationship Overview
Users
 │
 ├──────────────┐
 │              │
 │              │
News         Publications
 │              │
 │              │
 └────── Categories
                │
                │
            Documents

Programs
    │
    ├──── Galleries
    │
    └──── Files

Services
    │
    └──── Downloads

Officials
     │
Departments

Pages
 │
 └── Attachments

Complaints
PPID Requests
Contact Messages

Settings
Menus
Visitors
Logs
4. Database Tables
Authentication Module
users

Stores administrator accounts.

Field	Type
id	bigint
role_id	FK
name	varchar
email	varchar
password	varchar
avatar	varchar
phone	varchar
status	boolean
last_login	datetime
remember_token	varchar
created_at	timestamp
updated_at	timestamp
deleted_at	timestamp

Relationship

Role
 1
 │
 │
∞
Users
roles
Field	Type
id	bigint
name	varchar
description	text

Relationship

Role
 1
 │
∞
Users
Organization Module
departments

Represents organizational divisions.

Secretary
Planning Division
Waste Management
Environmental Control
Administration
Laboratory

Fields

id
name
description
created_at
updated_at
officials

Stores leadership information.

Head of Agency

Secretary

Division Head

Section Head

Fields

id
department_id
name
position
photo
biography
email
phone
display_order
status

Relationship

Department
    1
    │
    │
    ∞
Officials
News Module
news_categories
id
name
slug
description
news

Main news articles.

Fields

id
category_id
author_id
title
slug
summary
content
featured_image
published_at
status
views
is_featured
seo_title
seo_description
seo_keywords

Relationship

Category
    1
    │
    │
    ∞
News

User
 1
 │
∞
News
Pages Module
pages

Static pages.

Examples

About

Vision

Mission

History

Organizational Structure

Strategic Plan

Performance Report

Public Information

Fields

id
title
slug
content
banner
status
template
seo_title
seo_description
Gallery Module
galleries

Gallery Album

id
title
description
cover_image
created_by
gallery_items
id
gallery_id
image
caption
sort_order

Relationship

Gallery
   1
   │
   │
   ∞
Gallery Items
Publication Module
publications

Stores downloadable publications.

Examples

Environmental Report

Annual Report

Strategic Plan

Performance Report

Research

Magazine

Fields

id
category_id
title
description
cover
file
year
downloads
status

Relationship

Publication Category
        1
        │
        │
        ∞
Publications
Download Module
downloads
Forms

Guidelines

Manuals

Templates

Official Documents

Fields

id
title
file
category
downloads
Environmental Programs
programs

Examples

Tree Planting

River Rehabilitation

Waste Bank

Adiwiyata

Climate Change

Biodiversity

Green Open Space

Fields

id
title
slug
description
content
thumbnail
start_date
end_date
status
program_images
id
program_id
image
caption

Relationship

Program
   1
   │
   │
   ∞
Program Images
Services
services

Examples

Environmental Permit

Laboratory Test

Waste Management

Public Consultation

Environmental Complaint

Fields

id
title
icon
description
procedure
requirements
service_hours
PPID
ppid_requests

Stores public information requests.

Fields

id
request_number
name
email
phone
institution
request_information
purpose
status
response
attachment
submitted_at
processed_by

Relationship

User
 1
 │
∞
PPID Requests
Contact
contact_messages
id
name
email
phone
subject
message
status
created_at
Complaints
complaints

Environmental complaints submitted by citizens.

Fields

id
ticket_number
name
email
phone
location
latitude
longitude
complaint
photo
status
response
handled_by
created_at

Relationship

User
 1
 │
∞
Complaints
Website Settings
settings

Global website configuration.

Site Name

Logo

Address

Phone

Email

Google Maps

Office Hours

Footer Text

Analytics

SEO
social_media
Facebook

Instagram

YouTube

TikTok

Twitter/X

Fields

id
platform
url
icon
display_order
Navigation
menus
Main Menu

Footer Menu

Quick Links
menu_items

Relationship

Menu
 1
 │
∞
Menu Items

Fields

id
menu_id
parent_id
title
url
icon
order
target

Supports unlimited hierarchical navigation through a self-referencing parent_id, enabling multi-level dropdown menus.

Visitor Analytics
visitor_logs
ip_address
country
city
device
browser
platform
visited_page
referrer
visited_at
activity_logs

Stores administrator activities.

Login

Logout

Create

Update

Delete

Publish

Download

Fields

id
user_id
action
module
description
ip_address
created_at

Relationship

User
 1
 │
∞
Activity Logs
5. Complete Relationship Diagram
Roles
  │
  └──────────────┐
                 │
                 ▼
              Users
                 │
      ┌──────────┼──────────────┐
      │          │              │
      ▼          ▼              ▼
   News      Complaints   PPID Requests
      │
      ▼
News Categories

Departments
      │
      ▼
Officials

Programs
      │
      ▼
Program Images

Galleries
      │
      ▼
Gallery Items

Publications
      │
      ▼
Publication Categories

Menus
      │
      ▼
Menu Items (Self Reference)

Pages

Services

Downloads

Documents

Settings

Social Media

Contact Messages

Visitor Logs

Activity Logs
6. Database Characteristics
Aspect	Description
Database Engine	MySQL / MariaDB
ORM	Laravel Eloquent ORM
Primary Keys	BIGINT (Auto Increment)
Foreign Keys	Referential Integrity Enabled
Normalization	Third Normal Form (3NF)
Soft Delete	Supported for major entities
Timestamp Tracking	created_at, updated_at, deleted_at
File Storage	Filesystem with database references only
Indexing	Primary, Foreign, Unique, Full-Text (where applicable)
Security	Foreign key constraints, role-based access control (RBAC), hashed passwords, audit logging
Scalability	Modular schema supporting future integration with REST APIs, mobile applications, GIS services, Open Data platforms, and Smart City ecosystems
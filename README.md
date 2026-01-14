<div align="center">

  <a name="readme-top"></a>
  # Chat Room

  [![License: MIT](https://img.shields.io/badge/License-MIT-lightgrey)](LICENSE)
  ![Status](https://img.shields.io/badge/Status-Completed-success)
  [![Backend](https://img.shields.io/badge/Backend-PHP%20%7C%20MySQL%20%7C%20Apache-blueviolet)](https://github.com/Amey-Thakur/CHAT-ROOM)
  [![Frontend](https://img.shields.io/badge/Frontend-AJAX%20%7C%20Bootstrap%20%7C%20jQuery-orange)](https://github.com/Amey-Thakur/CHAT-ROOM)
  [![Developed by Amey Thakur & Karan Dhiman](https://img.shields.io/badge/Developed%20by-Amey%20Thakur%20%26%20Karan%20Dhiman-blue)](https://github.com/Amey-Thakur/CHAT-ROOM)

  A web-based real-time chat application developed using HTML, CSS, JavaScript, PHP, AJAX, and MySQL, demonstrating asynchronous communication and dynamic Document Object Model (DOM) updates.

  **[Source Code](Source%20Code/)** &nbsp;·&nbsp; **[Technical Specification](docs/SPECIFICATION.md)** &nbsp;·&nbsp; **[Project Demo](https://youtu.be/Aem0k2Dl9fU)**

  [![Demo](https://img.youtube.com/vi/Aem0k2Dl9fU/0.jpg)](https://youtu.be/Aem0k2Dl9fU)

</div>

---

<div align="center">

  [Authors](#authors) &nbsp;·&nbsp; [Overview](#overview) &nbsp;·&nbsp; [Features](#features) &nbsp;·&nbsp; [Structure](#project-structure) &nbsp;·&nbsp; [Results](#system-architecture--design-gallery) &nbsp;·&nbsp; [Quick Start](#quick-start) &nbsp;·&nbsp; [Usage Guidelines](#usage-guidelines) &nbsp;·&nbsp; [License](#license) &nbsp;·&nbsp; [About](#about-this-repository) &nbsp;·&nbsp; [Acknowledgments](#acknowledgments)

</div>

---

<!-- AUTHORS -->
<div align="center">

  ## Authors

  **Terna Engineering College | Computer Engineering | Batch of 2022**

| <a href="https://github.com/Amey-Thakur"><img src="https://github.com/Amey-Thakur.png" width="150" height="150" alt="Amey Thakur"></a><br>[**Amey Thakur**](https://github.com/Amey-Thakur)<br><br>[![ORCID](https://img.shields.io/badge/ORCID-0000--0001--5644--1575-green.svg)](https://orcid.org/0000-0001-5644-1575) | <a href="https://github.com/Karan-Dhiman"><img src="https://github.com/Karan-Dhiman.png" width="150" height="150" alt="Karan Dhiman"></a><br>[**Karan Dhiman**](https://github.com/Karan-Dhiman)<br><br>[![GitHub](https://img.shields.io/badge/GitHub-Karan--Dhiman-black?style=flat&logo=github)](https://github.com/Karan-Dhiman) |
| :---: | :---: |

</div>

> [!IMPORTANT]
> ### 🤝🏻 Special Acknowledgement
> *Special thanks to **[Karan Dhiman](https://github.com/Karan-Dhiman)** for his meaningful contributions, technical insights, and collaborative support that significantly enhanced the quality and success of this project.*

---

<!-- OVERVIEW -->
## Overview

The **Chat Room** is a web-based messaging utility developed to demonstrate the practical application of asynchronous data retrieval and real-time frontend updates. It features a streamlined interface that allows users to communicate instantly without the need for manual page refreshes.

Developed as a mini-project for the **Web Designing Laboratory** curriculum, this tool showcases the integration of relational database management (MySQL) with server-side scripting (PHP) and asynchronous JavaScript (AJAX).

> [!NOTE]
> **Research Impact**
>
> This project was published as an academic research paper in the **International Journal for Research in Applied Science & Engineering Technology (IJRASET)** (Volume 9, Issue 7), with a scholarly **Preprint** available on **arXiv**. The project received an official **Publication Certificate** for its research contribution to web development education.
>
> - [Preprint @arXiv](https://arxiv.org/abs/2106.14704)
> - [Published Paper @IRJET](https://www.irjet.net/archives/V8/i6/IRJET-V8I6348.pdf)
> - [Publication Certificate](Mini-Project/Publication%20Certificate.png)

 ### Resources

 | # | Resource | Description | Date | Marks |
 |---|---|---|---|---|
 | 1 | [**Source Code**](Source%20Code/) | Complete web application source code | — | — |
 | 2 | [**Technical Specification**](docs/SPECIFICATION.md) | System architecture and specifications | — | — |
 | 3 | [**Project Report**](Mini-Project/B-28,31,50,51_WDL_Mini_Project_Report.pdf) | Detailed documentation and system design | December 02, 2020 | 09/10 |
 | 4 | [**Project Presentation**](Mini-Project/Presentation%20-%20CHAT%20ROOM%20USING%20HTML,%20PHP,%20CSS,%20JS,%20AJAX%20PRESENTATION.pdf) | Visual overview of the development lifecycle | December 02, 2020 | 09/10 |
 | 5 | [**Project Demo (YouTube)**](https://youtu.be/Aem0k2Dl9fU) | Real-time demonstration of features | — | — |
 | 6 | [**Project Demo (MP4)**](Mini-Project/Chat%20Room.mp4) | Local video demonstration of features | — | — |
 | 7 | [**Award Certificate**](Mini-Project/IRJET%20-%20Chat%20Room%20using%20HTML,%20PHP,%20CSS,%20JS,%20AJAX.jpg) | Recognition for project excellence | — | — |
 | 8 | [**Publication Certificate**](Mini-Project/Publication%20Certificate.png) | Official journal publication certificate | — | — |
 | 9 | [**WDL Laboratory**](https://github.com/Amey-Thakur/WEB-DESIGNING-LAB) | Computer Engineering Laboratory Repository | — | — |

> [!TIP]
> **Asynchronous Communication Architecture**
>
> To optimize server performance and reduce bandwidth, the AJAX polling interval can be dynamically adjusted based on user activity or replaced with WebSocket technology for true bi-directional, persistent socket connections.

<div align="center">
  <br>
  <img src="Mini-Project/CHAT ROOM POSTER.png" width="80%" alt="CHAT-ROOM Poster"/>
</div>

---

<!-- FEATURES -->
## Features

| Feature | Description |
|---------|-------------|
| **Real-Time Communication** | Instant messaging updates using AJAX polling at 1-second intervals. |
| **History Persistence** | Automatic storage and retrieval of chat logs from a MySQL database. |
| **User Identification** | Simple identity management for distinguishing senders within the chat stream. |
| **Temporal Tracking** | Automatic timestamping of messages for chronological message ordering. |
| **Responsive UI** | Mobile-friendly layout designed with Bootstrap for accessibility across devices. |
| **Audio Feedback** | Subtle sound notifications for message events to enhance user engagement. |

### Tech Stack
- **Language**: PHP 7.x
- **Database**: MySQL 5.x+
- **Frontend**: HTML5, CSS3, Bootstrap, jQuery (AJAX)
- **Server**: Apache (XAMPP/WAMP)

---

<!-- STRUCTURE -->
## Project Structure

```python
CHAT-ROOM/
│
├── docs/                                    # Formal Documentation
│   └── SPECIFICATION.md                     # Technical Architecture & Specification
│
├── Mini-Project/                            # Research & Academic Assets
│   ├── Draft/                               # Preliminary Research Data
│   │   └── IRJET - Chat Room.docx           # Working Manuscript Draft
│   ├── Figures/                             # System Diagrams & Architecture
│   │   ├── Fig. (1) Flow Diagram.png        # System Logic Flowchart
│   │   ├── Fig. (2) 0 level DFD.png         # Context Level Data Flow
│   │   ├── Fig. (3) 1 level DFD.png         # Level 1 Data Flow Diagram
│   │   ├── Fig. (4) 2 level DFD.png         # Level 2 Data Flow Diagram
│   │   └── Fig. (5) Comparison...           # Comparative Analysis Diagram
│   ├── B-28,31,50,51_WDL_Mini_Project.pdf   # Formal Academic Report
│   ├── CHAT ROOM POSTER.png                 # Project Presentation Poster
│   ├── Chat Room.mp4                        # Project Demonstration Video
│   ├── IRJET-V8I6 - Chat Room.pdf           # Published Journal Research Paper
│   ├── Preprint - Chat Room.pdf             # Scholarly Preprint Version
│   ├── Presentation - Chat Room.pdf         # Technical Presentation Assets
│   └── User Interface.png                   # Application UI Visualization
│
├── Source Code/                             # Real-Time Web Application (AJAX)
│   ├── images/                              # UI Background & Media Assets
│   ├── sound/                               # Audio Notification Signals
│   ├── sql database/                        # Data Architecture (MySQL)
│   │   └── chat_info.sql                    # Relational Database Schema
│   ├── chat.php                             # AJAX Message Fetching Logic
│   ├── db.php                               # Database Connection Liaison
│   ├── index.php                            # Application Entry Gateway
│   ├── script.js                            # Asynchronous Client Logic
│   └── style.css                            # Presentation Layer Styling
│
├── .gitattributes                           # Global Git LFS & Config
├── .gitignore                               # Asset Exclusion Manifest
├── CITATION.cff                             # Scholarly Citation Metadata
├── codemeta.json                            # Machine-Readable Metadata
├── LICENSE                                  # Project Licensing Terms
├── README.md                                # Comprehensive Archival Entrance
└── SECURITY.md                              # Vulnerability Exposure Policy
```

---

<!-- RESULTS -->
## System Architecture & Design Gallery

<div align="center">

  ### User Interface Visualization
  ![User Interface](Mini-Project/User%20Interface.png)

  ### System Logic Flowchart
  ![Flow Diagram](Mini-Project/Figures/Fig.%20%281%29%20Flow%20Diagram.png)

  ### Context Level Data Flow (Zero Level DFD)
  ![0 level DFD](Mini-Project/Figures/Fig.%20%282%29%200%20level%20DFD.png)

  ### Level 1 Data Flow Diagram
  ![1 level DFD](Mini-Project/Figures/Fig.%20%283%29%201%20level%20DFD.png)

  ### Level 2 Data Flow Diagram
  ![2 level DFD](Mini-Project/Figures/Fig.%20%284%29%202%20level%20DFD.png)

  ### Comparative Analysis
  ![Comparison](Mini-Project/Figures/Fig.%20%285%29%20Comparison%20of%20Chat%20Room%20System%20with%20the%20Previous%20system.png)

</div>

---

<!-- QUICK START -->
## Quick Start

### 1. Prerequisites
Ensure your local development environment meets the following requirements:
- **Web Server**: Apache (via [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](http://www.wampserver.com/en/)).
- **PHP**: Version **7.0** or higher.
- **Database**: MySQL **5.6** or higher.

> [!WARNING]
> **Technical Dependencies & Environment**
>
> This system is built using **PHP 7.x** and **Bootstrap 3**. For stable execution and educational reference, it is recommended to run this in a controlled local environment (e.g., XAMPP/WAMP) to align with the baseline server-side scripting and frontend framework requirements.

### 2. Setup & Deployment
1.  **Clone the Repository**:
    ```bash
    git clone https://github.com/Amey-Thakur/CHAT-ROOM.git
    ```
2.  **Deploy Source Code**:
    -   Copy the contents of the `Source Code` folder into your server's root directory (e.g., `C:\xampp\htdocs\chatroom\`).

### 3. Database Configuration
1.  **Start Services**: Launch Apache and MySQL via your control panel.
2.  **Create Database**:
    -   Access phpMyAdmin and create a new database named `chat_info`.
3.  **Import Schema**:
    -   Select the `chat_info` database and import `Source Code/sql database/chat_info.sql`.

### 4. Application Configuration
Update the database connection settings in `Source Code/db.php`:
```php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "chat_info";
```

### 5. Launch Application
-   Navigate to: `http://localhost/chatroom/`

---

<!-- =========================================================================================
                                     USAGE SECTION
     ========================================================================================= -->
## Usage Guidelines

This repository is openly shared to support learning and knowledge exchange across the academic community.

**For Students**  
Use this mini-project as a reference for understanding asynchronous communication using AJAX, real-time data retrieval with PHP/MySQL, and dynamic DOM updates. The experiments and research assets are documented to support self-paced learning and exploration of real-time web applications.

**For Educators**  
This project may serve as a practical example or supplementary teaching resource for Web Designing Lab courses (`CSL504`). Attribution is appreciated when utilizing content.

**For Researchers**  
The published paper and preprint provide insights into the implementation of asynchronous communication architectures and their practical application in real-time messaging systems.

---

<!-- LICENSE -->
## License

This repository and all linked academic content are made available under the **MIT License**. See the [LICENSE](LICENSE) file for complete terms.

> [!NOTE]
> **Summary**: You are free to share and adapt this content for any purpose, even commercially, as long as you provide appropriate attribution to the original author.

Copyright © 2021 Amey Thakur, Karan Dhiman

---

<!-- ABOUT -->
## About This Repository

**Created & Maintained by**: [Amey Thakur](https://github.com/Amey-Thakur) & [Karan Dhiman](https://github.com/Karan-Dhiman)  
**Academic Journey**: Bachelor of Engineering in Computer Engineering (2018-2022)  
**Institution**: [Terna Engineering College](https://ternaengg.ac.in/), Navi Mumbai  
**University**: [University of Mumbai](https://mu.ac.in/)

This project features the **Chat Room**, a messaging utility developed as a **5th Semester Mini-Project**. It showcases the practical application of asynchronous programming, real-time data flow, and frontend-backend integration.

**Connect:** [GitHub](https://github.com/Amey-Thakur) &nbsp;·&nbsp; [LinkedIn](https://www.linkedin.com/in/amey-thakur) &nbsp;·&nbsp; [ORCID](https://orcid.org/0000-0001-5644-1575)

### Acknowledgments

Grateful acknowledgment to **[Karan Dhiman](https://github.com/Karan-Dhiman)** for his exceptional collaboration and technical partnership during the development of this project. His expertise in asynchronous logic and commitment to software quality were instrumental in building this real-time messaging system. Working alongside him was a transformative experience; his thoughtful approach to solving complex AJAX challenges and constant encouragement turned difficult hurdles into meaningful learning moments. This implementation serves as a testament to our shared academic journey and the insights we gained together. Thank you, Karan, for your dedication and support.

Grateful acknowledgment to the faculty members of the **Department of Computer Engineering** at Terna Engineering College for their guidance and instruction in Web Designing. Their expertise in frontend-backend integration and server-side scripting helped shape the technical foundation of this project.

Special thanks to the mentors and peers whose encouragement, discussions, and support contributed meaningfully to this learning endeavor.

---

<div align="center">

  [↑ Back to Top](#readme-top)

  [Authors](#authors) &nbsp;·&nbsp; [Overview](#overview) &nbsp;·&nbsp; [Features](#features) &nbsp;·&nbsp; [Structure](#project-structure) &nbsp;·&nbsp; [Results](#system-architecture--design-gallery) &nbsp;·&nbsp; [Quick Start](#quick-start) &nbsp;·&nbsp; [Usage Guidelines](#usage-guidelines) &nbsp;·&nbsp; [License](#license) &nbsp;·&nbsp; [About](#about-this-repository) &nbsp;·&nbsp; [Acknowledgments](#acknowledgments)

  <br>

  🔬 **[Web Designing Laboratory](https://github.com/Amey-Thakur/WEB-DESIGNING-LAB)** &nbsp;·&nbsp; 💬 **[Chat Room](https://github.com/Amey-Thakur/CHAT-ROOM)**

  ---

  #### Presented as part of the 5th Semester Mini-Project @ Terna Engineering College

  ---

  ### 🎓 [Computer Engineering Repository](https://github.com/Amey-Thakur/COMPUTER-ENGINEERING)

  **Computer Engineering (B.E.) - University of Mumbai**

  *Semester-wise curriculum, laboratories, projects, and academic notes.*

</div>

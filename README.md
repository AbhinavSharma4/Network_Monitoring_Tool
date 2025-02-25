
# 📌 Network Monitoring Tool

A Network Monitoring Tool project involves the development of software or a 
system designed to track, analyze, and manage the performance, health, 
and security of computer networks. The goal is to ensure that the network 
operates efficiently and without interruptions by continuously monitoring 
various components such as servers, devices, traffic, and protocols.



## Contents Listings

•	Overview
•	Features
•	Technologies Used
•	Prerequisites
•	Step by step installation
•	Usage
## Overview 
o	A Network Monitoring Tool is a software or system that continuously observes a network’s performance, security, and traffic. It helps administrators detect, diagnose, and resolve network issues while ensuring smooth communication and security.To implementing a Network Monitoring Tool using LAMP and tcpdump.

o	It also involves providing real-time alerts for network failures, ensuring 
o	security by detecting unauthorized activities, and offering data visualization 
o	tools.
## Features
    ✔ Real-Time Traffic Monitoring
    ✔ Traffic Capture (tcpdump)
    ✔ Packet Analysis & Deep Inspection
    ✔ Performance Optimization
    ✔ Web-Based Dashboard Using LAMP Stack
    ✔ Deployed on Apache (Linux Server)
    ✔ Automated packet classification using check.sh script
## Technologies Used
•	Frontend: HTML, CSS, JavaScript
•	Backend: PHP
•	Database: MySQL
•	Server: Apache (Linux)
•	Network Monitoring: TCPDump, Bash Script (packet.sh)
## Prerequisites 
Before deploying the Network Monitoring Tool (NMT) using LAMP (Linux, Apache, MySQL, PHP) and tcpdump, ensure you have the following system requirements, dependencies, and configurations in place :-

    PHP
    Apache Web Server
    Set Up MySQL Database for Traffic Logs
    Install tcpdump for Packet Capture
    Bash (for running check.sh)

## Step-by-Step Installation
🔧 Installation

1.Clone the repository:

    git clone https://github.com/AbhinavSharma4/Network_Monitoring_Tool.git

2.Move into the project directory: 
    
    cd network-monitoring-tool

3.Install Apache, MySQL, PHP by using terminal:

    sudo apt update
    sudo apt install apache2 mysql-server php php-mysql

3.Set up Mysql database

    Import the database:
    mysql -u root -p < sql/command.mysql

4.Start the Monitoring Service

    sudo bash scripts/check.sh

5.Run the Application

    • Start the Apache server:
    sudo systemctl start apache2

    • Access the tool via http://localhost/your_project_folder/

## Usage
Usage in Cybersecurity & Network Analysis :-

🔹 Security Monitoring

    ✅ Detect suspicious network activity
    ✅ Identify intrusion attempts
    ✅ Monitor unusual IP connections

🔹 Network Performance Analysis

    ✅ Analyze bandwidth usage
    ✅ Detect network congestion
    ✅ Track packet loss and latency



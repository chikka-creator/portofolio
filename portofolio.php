<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio DPK</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        * {
            scroll-behavior: smooth;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #0a0a0a;
            color: #e0e0e0;
            overflow-x: hidden;
        }

        /* Particles Background */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: #ffffff10;
            border-radius: 50%;
            animation: float 15s infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0);
            }
            25% {
                transform: translateY(-100px) translateX(50px);
            }
            50% {
                transform: translateY(0) translateX(100px);
            }
            75% {
                transform: translateY(100px) translateX(50px);
            }
        }

        header {
            background: rgba(10, 10, 10, 0.8);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid #ffffff20;
        }

        .nav {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            position: relative;
            padding: 5px 10px;
            transition: all 0.3s;
        }

        .nav a::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #00fff2;
            transition: width 0.3s;
        }

        .nav a:hover::before {
            width: 100%;
        }

        .nav a:hover {
            color: #00fff2;
            text-shadow: 0 0 10px #00fff2;
        }

        .cover {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #000428, #004e92);
        }

        .cover::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(
                transparent 0%,
                rgba(0, 255, 242, 0.05) 0.5%,
                transparent 1%
            );
            animation: scan 5s linear infinite;
        }

        @keyframes scan {
            0% {
                transform: translateY(-50%);
            }
            100% {
                transform: translateY(0%);
            }
        }

        .cover img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 3px solid #00fff2;
            box-shadow: 0 0 30px #00fff2;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 30px #00fff2;
            }
            50% {
                box-shadow: 0 0 50px #00fff2;
            }
            100% {
                box-shadow: 0 0 30px #00fff2;
            }
        }

        

        @keyframes glow {
            0%, 100% {
                text-shadow: 0 0 20px rgba(0, 255, 242, 0.5);
            }
            50% {
                text-shadow: 0 0 40px rgba(0, 255, 242, 0.8);
            }
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        section {
            margin: 100px 0;
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s;
        }

        section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .section-title {
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #00fff2;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .profil {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #00fff220;
            border-radius: 20px;
            padding: 40px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s;
        }

        .profil:hover {
            transform: translateY(-10px);
            border-color: #00fff2;
        }

        .skills {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 40px;
        }

        .skill-item {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #00fff220;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            position: relative;
            cursor: pointer;
            transition: all 0.3s;
        }

        .skill-item:hover {
            transform: translateY(-10px) scale(1.05);
            border-color: #00fff2;
            box-shadow: 0 0 30px rgba(0, 255, 242, 0.2);
        }

        .skill-description {
            display: none;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.9);
            color: #000;
            padding: 10px;
            border-radius: 5px;
            width: 80%;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            font-size: 0.9em;
            z-index: 10;
        }

        .skill-item:hover .skill-description {
            display: block;
        }

        .contact {
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(45deg, #00fff2, #0066ff);
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            transition: 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(0, 255, 242, 0.5);
        }

        footer {
            background: rgba(10, 10, 10, 0.8);
            backdrop-filter: blur(10px);
            padding: 20px;
            text-align: center;
            border-top: 1px solid #ffffff20;
        }

        @media (max-width: 768px) {
            .nav {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }

            .cover h1 {
                font-size: 2.5em;
                text-align: center;
            }
        }
        
        .paragraft{

            text-align: center;
            font-size: 30px;
        }
        .projects {
    padding: 40px 20px;
    margin: 100px 0;
}

.project-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    padding: 20px;
}

.project-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid #00fff220;
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s;
    position: relative;
}

.project-card:hover {
    transform: translateY(-10px);
    border-color: #00fff2;
    box-shadow: 0 0 30px rgba(0, 255, 242, 0.2);
}

.project-image {
    height: 200px;
    background: linear-gradient(45deg, #000428, #004e92);
    position: relative;
}

.project-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: repeating-linear-gradient(
        transparent 0%,
        rgba(0, 255, 242, 0.05) 0.5%,
        transparent 1%
    );
    animation: scan 5s linear infinite;
}

.project-content {
    padding: 20px;
}

.project-content h3 {
    color: #00fff2;
    margin-bottom: 15px;
    font-size: 1.5em;
}

.project-content p {
    color: #e0e0e0;
    margin-bottom: 20px;
    line-height: 1.6;
}

.project-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
}

.project-tags span {
    background: rgba(0, 255, 242, 0.1);
    color: #00fff2;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9em;
    border: 1px solid #00fff240;
}

.project-btn {
    display: inline-block;
    padding: 10px 25px;
    background: linear-gradient(45deg, #00fff2, #0066ff);
    color: #fff;
    text-decoration: none;
    border-radius: 20px;
    font-weight: bold;
    letter-spacing: 1px;
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
}

.project-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.2),
        transparent
    );
    transition: 0.5s;
}

.project-btn:hover::before {
    left: 100%;
}

.project-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(0, 255, 242, 0.5);
}

@media (max-width: 768px) {
    .project-grid {
        grid-template-columns: 1fr;
    }
}
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    z-index: 1000;
    backdrop-filter: blur(5px);
}

.modal-content {
    position: relative;
    background: rgba(10, 10, 10, 0.95);
    width: 90%;
    max-width: 800px;
    margin: 50px auto;
    padding: 30px;
    border-radius: 15px;
    border: 1px solid #00fff240;
    box-shadow: 0 0 50px rgba(0, 255, 242, 0.2);
    animation: modalFadeIn 0.3s ease-out;
}

@keyframes modalFadeIn {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.close-modal {
    position: absolute;
    right: 20px;
    top: 20px;
    font-size: 30px;
    color: #00fff2;
    cursor: pointer;
    transition: all 0.3s;
}

.close-modal:hover {
    transform: rotate(90deg);
    color: #fff;
}

.modal-body {
    color: #e0e0e0;
}

.modal-body h2 {
    color: #00fff2;
    font-size: 2em;
    margin-bottom: 20px;
    text-align: center;
}

.modal-image {
    width: 100%;
    height: 300px;
    background: linear-gradient(45deg, #000428, #004e92);
    margin-bottom: 20px;
    border-radius: 10px;
    overflow: hidden;
}

.modal-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.modal-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
}

.modal-tags span {
    background: rgba(0, 255, 242, 0.1);
    color: #00fff2;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9em;
    border: 1px solid #00fff240;
}

.modal-description {
    margin-bottom: 30px;
    line-height: 1.6;
}

.modal-links {
    display: flex;
    gap: 20px;
    justify-content: center;
}

.modal-btn {
    padding: 10px 25px;
    background: linear-gradient(45deg, #00fff2, #0066ff);
    color: #fff;
    text-decoration: none;
    border-radius: 20px;
    font-weight: bold;
    letter-spacing: 1px;
    transition: all 0.3s;
    border: none;
    cursor: pointer;
}

.modal-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(0, 255, 242, 0.5);
}

@media (max-width: 768px) {
    .modal-content {
        width: 95%;
        margin: 20px auto;
        padding: 20px;
    }
    
    .modal-image {
        height: 200px;
    }
    
    .modal-links {
        flex-direction: column;
        align-items: center;
    }
}
.typing-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}


@keyframes typing {
    from { width: 0 }
    to { width: 100% }
}

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}

@keyframes glow-cursor {
    0%, 100% {
        box-shadow: 0 0 5px #00fff2,
                    0 0 10px #00fff2,
                    0 0 15px #00fff2;
    }
    50% {
        box-shadow: 0 0 10px #00fff2,
                    0 0 20px #00fff2,
                    0 0 30px #00fff2;
    }
}

/* Adjust for mobile screens */
@media (max-width: 768px) {
    .typing-text {
        font-size: 2.5em;
    }
    .cursor {
        height: 40px;
    }
}
.certificates-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 20px;
        }

        .certificate-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #00fff220;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s;
            position: relative;
        }

        .certificate-card:hover {
            transform: translateY(-10px);
            border-color: #00fff2;
            box-shadow: 0 0 30px rgba(0, 255, 242, 0.2);
        }

        .certificate-image {
            height: 200px;
            background: linear-gradient(45deg, #000428, #004e92);
            position: relative;
            overflow: hidden;
        }

        .certificate-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .certificate-card:hover .certificate-image img {
            transform: scale(1.05);
        }

        .certificate-content {
            padding: 20px;
        }

        .certificate-content h3 {
            color: #00fff2;
            margin-bottom: 15px;
            font-size: 1.5em;
        }

        .certificate-content p {
            color: #e0e0e0;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .certificate-metadata {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #00fff2;
            font-size: 0.9em;
            margin-top: 10px;
        }

        .certificate-issuer {
            padding: 5px 15px;
            background: rgba(0, 255, 242, 0.1);
            border-radius: 20px;
            border: 1px solid #00fff240;
        }

        .certificate-date {
            color: #e0e0e0;
        }

        @media (max-width: 768px) {
            .certificates-grid {
                grid-template-columns: 1fr;
            }
        }
        .typing-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}

.typing-text {
    color: cyan;
    font-size: 3rem;
    white-space: nowrap; /* Mencegah teks terputus */
    overflow: hidden; /* Menyembunyikan teks yang tidak terlihat */
}

.cursor {
    width: 3px;
    height: 50px;
    margin-left: 4px;
    animation: blink 0.8s infinite; /* Animasi berkedip */
}

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}

@media (max-width: 768px) {
    .typing-text {
        font-size: 2.5em;
    }
    .cursor {
        height: 40px;
    }
}
    </style>
</head>
<body>
    <div class="particles" id="particles"></div>

    <header>
        <div class="nav">
            <a href="#menu">MENU</a>
            <a href="#profil">ABOUT ME</a>
            <a href="#skills">SKILL</a>
            <a href="#projects">PROJECT</a>
            <a href="#certificates">CERTIFICATES</a>
            <a href="#contact">CONTACT</a>
        </div>
    </header>

    <section class="cover" id="menu">
        <img src="/portofolio/res/images/fakhri.jpg" alt="Profile Picture">
        <div class="typing-container">
            <h1 class="typing-text" id="typingtext"></h1>
            <div class="cursor"></div>
        </div>      
    </section>

    <div class="container">
        <section class="profil" id="profil">
            <h1 class="section-title">About Me</h1>
            <p class="paragraft">My name is Fakhri Cahyo D.N. My hobby is coding, and I learned coding autodidactically. This is a new experience for me to create a portfolio website. My educational background is that I attended SMPN 6 SBY, I was also quite active in participating in school activities (in class or organizations)for now I am attending smk negeri 1 surabaya majoring in rpl, I go to school here to develop my talents in the field of web creation.</p>
        </section>

        <section class="skills" id="skills">
            <h1 class="section-title">Skills</h1>
            <div class="skill-item" data-description="HTML is the structure of web pages.">HTML
                <div class="skill-description">HTML is the structure of web pages.</div>
            </div>
            <div class="skill-item" data-description="CSS is used for styling web pages.">CSS
                <div class="skill-description">CSS is used for styling web pages.</div>
            </div>
            <div class="skill-item" data-description="Python is a versatile programming language.">Python
                <div class="skill-description">Python is a versatile programming language.</div>
            </div>
            <div class="skill-item" data-description="JavaScript brings interactivity to web pages.">JavaScript
                <div class="skill-description">JavaScript brings interactivity to web pages.</div>
            </div>
            <div class="skill-item" data-description="C++ is used for system programming and competitive coding.">C++
                <div class="skill-description">C++ is used for system programming and competitive coding.</div>
            </div>
        </section>
        <section id="projects" class="projects">
            <h1 class="section-title">Projects</h1>
            <div class="project-grid">
                <div class="project-card" 
                     data-title="Game GGJ 2025"
                     data-description="A responsive personal blog built with modern web technologies. Features include dark mode, comment system, and dynamic content loading."
                     data-image="/portofolio/res/images/game.jpg"
                     data-tags="PHOTOSHOP,PIXILART,UNITY"
                     data-demo="https://astreda.itch.io/soapocalypse"
                     data-source="https://www.instagram.com/cxhxyho/">
                    <div class="project-image">
                        <div class="project-overlay"></div>
                    </div>
                    <div class="project-content">
                        <h3>Game GGJ 2025</h3>
                        <p>A modern game platform with responsive design</p>
                        <div class="project-tags">
                            <span>PHOTOSHOP</span>
                            <span>PIXILART</span>
                            <span>UNITY</span>
                        </div>
                        <button class="project-btn view-project">View Project</button>
                    </div>
                </div>
                <div class="project-card" 
                     data-title="market 2025"
                     data-description="A responsive personal blog built with modern web technologies. Features include dark mode, comment system, and dynamic content loading."
                     data-image="/portofolio/res/images/market.png"
                     data-tags="HTML,CSS,JS"
                     data-demo="/market/market.html"
                     data-source="https://www.instagram.com/cxhxyho/">
                    <div class="project-image">
                        <div class="project-overlay"></div>
                    </div>
                    <div class="project-content">
                        <h3>MARKET</h3>
                        <p>A modern MARKET</p>
                        <div class="project-tags">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JS</span>
                        </div>
                        <button class="project-btn view-project">View Project</button>
                    </div>
                </div>
                <div class="project-card" 
                     data-title="Kalkulator"
                     data-description="simpel web Kalkulator"
                     data-image="/portofolio/res/images/kalkulator.png"
                     data-tags="html,css,js"
                     data-demo="/kalkulator/kalkulator.html"
                     data-source="https://www.instagram.com/cxhxyho/">
                    <div class="project-image">
                        <div class="project-overlay"></div>
                    </div>
                    <div class="project-content">
                        <h3>kalkulator</h3>
                        <p>simpel web kalkulator</p>
                        <div class="project-tags">
                            <span>html</span>
                            <span>css</span>
                            <span>js</span>
                        </div>
                        <button class="project-btn view-project">View Project</button>
                    </div>
                </div>
                <div class="project-card" 
                     data-title="Artikel"
                     data-description="A responsive personal blog built with modern web technologies. Features include dark mode, comment system, and dynamic content loading."
                     data-image="/portofolio/res/images/artikel.png"
                     data-tags="HTML,CSS,JS"
                     data-demo="/artikel/artikel.html"
                     data-source="https://www.instagram.com/cxhxyho/">
                    <div class="project-image">
                        <div class="project-overlay"></div>
                    </div>
                    <div class="project-content">
                        <h3>artikel</h3>
                        <p>A modern game platform with responsive design</p>
                        <div class="project-tags">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JS</span>
                        </div>
                        <button class="project-btn view-project">View Project</button>
                    </div>
                </div>
                <div class="project-card" 
                     data-title="kasir"
                     data-description="A responsive personal blog built with modern web technologies. Features include dark mode, comment system, and dynamic content loading."
                     data-image="/portofolio/res/images/kasir.png"
                     data-tags="HTML,CSS,JS"
                     data-demo="/kasir/kasir.html"
                     data-source="https://www.instagram.com/cxhxyho/">
                    <div class="project-image">
                        <div class="project-overlay"></div>
                    </div>
                    <div class="project-content">
                        <h3>KASIR</h3>
                        <p>A modern KASIR platform with responsive design</p>
                        <div class="project-tags">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JS</span>
                        </div>
                        <button class="project-btn view-project">View Project</button>
                    </div>
                </div>
                <div class="project-card" 
                     data-title="SISWA"
                     data-description="A responsive personal blog built with modern web technologies. Features include dark mode, comment system, and dynamic content loading."
                     data-image="/portofolio/res/images/chikka.png"
                     data-tags="HTML,CSS,JS,PHP"
                     data-demo="http://localhost/shizukasiswasmp/index.php"
                     data-source="https://www.instagram.com/cxhxyho/">
                    <div class="project-image">
                        <div class="project-overlay"></div>
                    </div>
                    <div class="project-content">
                        <h3>database siswa</h3>
                        <p>A modern DATABASESISWA platform with responsive design</p>
                        <div class="project-tags">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JS</span>
                            <span>PHP</span>
                        </div>
                        <button class="project-btn view-project">View Project</button>
                    </div>
                </div>
                <!-- Add more project cards following the same structure -->
            </div>
        
                
        </section>
        <div class="modal" id="projectModal">
            <div class="modal-content">
                <span class="close-modal">&times;</span>
                <div class="modal-body">
                    <h2 id="modalTitle">Project Title</h2>
                    <div class="modal-image">
                        <!-- Project screenshot will be loaded here -->
                    </div>
                    <div class="modal-tags" id="modalTags">
                        <!-- Tags will be loaded here -->
                    </div>
                    <div class="modal-description" id="modalDescription">
                        <!-- Project description will be loaded here -->
                    </div>
                    <div class="modal-links">
                        <a href="#" id="liveDemo" class="modal-btn" target="_blank">view</a>
                        <a href="#" id="sourceCode" class="modal-btn" target="_blank">instagram</a>
                    </div>
                </div>
            </div>
        </div>
         <section id="certificates" class="projects">
        <h1 class="section-title">Certificates</h1>
        <div class="certificates-grid">
            <!-- Certificate Card 1 -->
            <div class="certificate-card">
                <div class="certificate-image">
                    <img src="/portofolio/res/images/game ggj.jpg" alt="Web Development Certificate">
                </div>
                <div class="certificate-content">
                    <h3>GGJ 2025</h3>
                    <p>GGJ is an event to develop talent / interest in making a game with the theme of bubbles</p>
                    <div class="certificate-metadata">
                        <span class="certificate-issuer">Unity Learn</span>
                        <span class="certificate-date">January 2025</span>
                    </div>
                </div>
            </div>

            <!-- Certificate Card 2 -->
            <div class="certificate-card">
                <div class="certificate-image">
                    <img src="/portofolio/res/images/cagak.jpg" alt="Python Programming Certificate">
                </div>
                <div class="certificate-content">
                    <h3>Cagak 2024</h3>
                    <p>cagak is a scout program that is required for grade 10 students to earn rights (a bet) and gain adventure experience.</p>
                    <div class="certificate-metadata">
                        <span class="certificate-issuer">Camping</span>
                        <span class="certificate-date">December 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="contact" id="contact">
           
            <h1 class="section-title">Contact</h1>
            <a href="https://wa.me/628815021497" target="_blank" class="btn">Contact Me</a>
        <br>
        <br>
            <h1 class="section-title">Email</h1>
            <a href="mailto:ditofakhri3@example.com" class="btn">Email Me</a>
        </section> 
        
        <form action="" method="POST">
            <input type="text" name="nama">
            <input type="email" name="email">
            <input type="text" name="pesan">
        </form>
    </div>

    <footer>
        <p>&copy; (F) X RPL 1</p>
    </footer>

    <script>
  const texts = ["welcome my portofolio", "enjoy"];
const typingSpeed = 100;
const erasingSpeed = 50;
const delayBeforeErase = 1000;
let i = 0;
let j = 0;
let isDeleting = false;

function typeEffect() {
  const element = document.getElementById("typingtext");

  if (!element) return;

  if (!isDeleting && j < texts[i].length) {
    element.textContent += texts[i].charAt(j);
    j++;
    setTimeout(typeEffect, typingSpeed);
  } else if (isDeleting && j > 0) {
    element.textContent = texts[i].substring(0, j - 1);
    j--;
    setTimeout(typeEffect, erasingSpeed);
  } else {
    isDeleting = !isDeleting;
    if (!isDeleting) {
      i = (i + 1) % texts.length; // Ganti ke teks berikutnya setelah dihapus
    }
    setTimeout(typeEffect, delayBeforeErase);
  }
}

window.onload = typeEffect;
        const modal = document.getElementById('projectModal');
const modalTitle = document.getElementById('modalTitle');
const modalTags = document.getElementById('modalTags');
const modalDescription = document.getElementById('modalDescription');
const modalImage = document.querySelector('.modal-image');
const liveDemo = document.getElementById('liveDemo');
const sourceCode = document.getElementById('sourceCode');
const closeModal = document.querySelector('.close-modal');

// Add click event to all view project buttons
document.querySelectorAll('.view-project').forEach(button => {
    button.addEventListener('click', function() {
        const card = this.closest('.project-card');
        
        // Get data from card
        const title = card.dataset.title;
        const description = card.dataset.description;
        const tags = card.dataset.tags.split(',');
        const demo = card.dataset.demo;
        const source = card.dataset.source;
        const image = card.dataset.image;

        // Update modal content
        modalTitle.textContent = title;
        modalDescription.textContent = description;
        modalTags.innerHTML = tags.map(tag => `<span>${tag}</span>`).join('');
        
        if (image) {
            modalImage.innerHTML = `<img src="${image}" alt="${title}">`;
        }
        
        liveDemo.href = demo;
        sourceCode.href = source;

        // Show modal
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Prevent scrolling
    });
});

// Close modal when clicking X
closeModal.addEventListener('click', () => {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto'; // Restore scrolling
});

// Close modal when clicking outside
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
});
        const particles = document.getElementById('particles');
        for(let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.width = Math.random() * 5 + 'px';
            particle.style.height = particle.style.width;
            particle.style.left = Math.random() * 100 + 'vw';
            particle.style.top = Math.random() * 100 + 'vh';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particles.appendChild(particle);
        }

        const sections = document.querySelectorAll('section');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        sections.forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>
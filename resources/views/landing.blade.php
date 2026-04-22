<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Cave | Digital Sanctuary</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="description" content="High-performance, terminal-style productivity workspace.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white font-mono selection:bg-success selection:text-black">
    <div id="app">
        <!-- Navigation -->
        <nav class="fixed top-0 w-full z-40 border-b border-white/5 bg-black/80 backdrop-blur-md">
            <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-success rounded-full animate-pulse shadow-[0_0_8px_#00FF00]"></div>
                    <span class="text-accent font-bold">THE CAVE</span>
                </div>
                <div class="hidden md:flex items-center gap-8 text-xs tracking-widest uppercase text-white/50">
                    <a href="#problem" class="hover:text-success transition-colors">Problem</a>
                    <a href="#features" class="hover:text-success transition-colors">Features</a>
                    <a href="#stack" class="hover:text-success transition-colors">Stack</a>
                    <a href="#install" class="hover:text-success transition-colors">Install</a>
                </div>
                <a href="https://cave-orcin.vercel.app/" target="_blank" rel="noopener noreferrer" class="text-[10px] border border-accent/20 px-4 py-2 hover:bg-accent/10 transition-all uppercase tracking-widest inline-block">
                    GET STARTED
                </a>
            </div>
        </nav>

        <main>
            <!-- Hero -->
            <section id="hero" class="min-h-screen flex flex-col items-center justify-center pt-20 px-6">
                <div class="max-w-4xl w-full text-center space-y-12">
                    <div class="flex justify-center">
                        <pre id="ascii-logo" class="logo-container pointer-events-none select-none text-success"></pre>
                    </div>

                    <div class="space-y-4">
                        <h1 class="text-3xl md:text-5xl lg:text-7xl font-bold text-accent uppercase tracking-tighter">
                            Your Sanctuary for <br> Deep Work
                        </h1>
                        <p class="text-white/40 max-w-xl mx-auto text-lg">
                            A terminal-style workspace built for focus, privacy, and speed.
                        </p>
                    </div>

                    <div class="max-w-2xl mx-auto w-full bg-[#050505] border border-white/10 rounded-lg overflow-hidden shadow-2xl">
                        <div class="flex items-center gap-1.5 px-4 py-2 bg-white/5 border-b border-white/5">
                            <div class="w-2 h-2 rounded-full bg-red-500/30"></div>
                            <div class="w-2 h-2 rounded-full bg-yellow-500/30"></div>
                            <div class="w-2 h-2 rounded-full bg-green-500/30"></div>
                            <span class="text-[8px] text-white/20 uppercase ml-2">thecave.sh</span>
                        </div>
                        <div class="p-6 text-left min-h-[160px] font-mono text-sm sm:text-base">
                            <div id="terminal-content" class="text-success glow-text"></div>
                        </div>
                    </div>

                    <button id="cta-hero" class="group relative px-10 py-5 bg-transparent border border-accent text-accent font-bold uppercase tracking-[0.2em] hover:bg-accent hover:text-black transition-all duration-500">
                        <span id="cta-text">Install The Cave</span>
                        <div class="absolute -bottom-1 -right-1 w-2 h-2 bg-success animate-pulse"></div>
                    </button>
                </div>
            </section>

            <!-- Problem -->
            <section id="problem" class="py-32 px-6 border-t border-white/5">
                 <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-20 items-center">
                    <div class="space-y-10">
                        <h2 class="text-4xl md:text-6xl font-bold text-accent uppercase tracking-tighter leading-none">Drowning in <br> Productivity Tools?</h2>
                        <div class="space-y-6 text-white/50 text-lg leading-relaxed">
                            <p>Modern work is chaotic. 50 tabs, endless notifications, and the friction of switching between five tools just to log a single thought.</p>
                            <p class="text-white/80 border-l-2 border-red-500/50 pl-6 italic">"I spent more time managing my tools than doing the actual work."</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-px bg-white/5 border border-white/10 overflow-hidden rounded-xl">
                        <div class="p-8 bg-black/40">
                             <p class="text-[10px] uppercase text-white/30 mb-6 font-bold tracking-widest"># The Chaos</p>
                             <ul class="space-y-2 text-xs text-white/20">
                                <li>$ open chrome</li>
                                <li>$ open slack</li>
                                <li>$ open notion</li>
                                <li>$ open jira</li>
                                <li>$ open discord</li>
                             </ul>
                        </div>
                        <div class="p-8 bg-success/5 relative overflow-hidden">
                             <p class="text-[10px] uppercase text-success/50 mb-6 font-bold tracking-widest"># The Cave</p>
                             <ul class="space-y-2 text-xs text-success">
                                <li>$ cave</li>
                                <li class="h-4 w-1 bg-success animate-cursor"></li>
                             </ul>
                             <div class="absolute bottom-[-20%] right-[-10%] w-32 h-32 bg-success/10 blur-3xl rounded-full"></div>
                        </div>
                    </div>
                 </div>
            </section>

            <!-- Features -->
            <section id="features" class="py-32 px-6">
                <div class="max-w-7xl mx-auto space-y-20">
                    <div class="text-center space-y-4">
                        <h2 class="text-3xl font-bold text-accent uppercase tracking-[0.3em]">Built for Speed</h2>
                        <p class="text-white/30">Keyboard-first. Local-first. Performance-first.</p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="feature-card p-10 bg-[#050505] border border-white/5 hover:border-success/30">
                            <span class="text-success text-3xl font-bold mb-6 block">01</span>
                            <h3 class="text-lg font-bold text-accent mb-4 uppercase">CLI Efficiency</h3>
                            <p class="text-white/40 text-sm mb-8">Control everything from your home row. No mouse latency.</p>
                            <div class="bg-black/50 p-4 font-mono text-[10px] border border-white/5">
                                <div class="text-success">$ todo add "Task"</div>
                                <div class="text-white/20">✓ Success</div>
                            </div>
                        </div>
                        <div class="feature-card p-10 bg-[#050505] border border-white/5 hover:border-success/30">
                            <span class="text-success text-3xl font-bold mb-6 block">02</span>
                            <h3 class="text-lg font-bold text-accent mb-4 uppercase">Local-First</h3>
                            <p class="text-white/40 text-sm mb-8">Your data is yours. Stored entirely in browser IndexedDB.</p>
                            <div class="bg-black/50 p-4 font-mono text-[10px] border border-white/5">
                                <div class="text-success">$ cave --sync</div>
                                <div class="text-white/20">✓ Local node OK</div>
                            </div>
                        </div>
                        <div class="feature-card p-10 bg-[#050505] border border-white/5 hover:border-success/30">
                            <span class="text-success text-3xl font-bold mb-6 block">03</span>
                            <h3 class="text-lg font-bold text-accent mb-4 uppercase">Focus Timer</h3>
                            <p class="text-white/40 text-sm mb-8">Integrated Pomodoro engine. Eliminate distractions.</p>
                            <div class="bg-black/50 p-4 font-mono text-[10px] border border-white/5">
                                <div class="text-success">$ focus 25m</div>
                                <div class="text-white/20">⏱ Active</div>
                            </div>
                        </div>
                        <div class="feature-card p-10 bg-[#050505] border border-white/5 hover:border-success/30">
                            <span class="text-success text-3xl font-bold mb-6 block">04</span>
                            <h3 class="text-lg font-bold text-accent mb-4 uppercase">PWA Ready</h3>
                            <p class="text-white/40 text-sm mb-8">Desktop and mobile apps via Service Workers.</p>
                            <div class="bg-black/50 p-4 font-mono text-[10px] border border-white/5">
                                <div class="text-success">$ cave --app</div>
                                <div class="text-white/20">✓ Installed</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Stack -->
            <section id="stack" class="py-20 bg-[#030303]">
                 <div class="max-w-4xl mx-auto flex flex-wrap justify-center gap-6">
                    <div class="px-6 py-3 border border-white/10 text-white/40 text-xs font-bold uppercase tracking-widest hover:border-accent hover:text-accent transition-all cursor-default">Laravel 11</div>
                    <div class="px-6 py-3 border border-white/10 text-white/40 text-xs font-bold uppercase tracking-widest hover:border-accent hover:text-accent transition-all cursor-default">Tailwind v4</div>
                    <div class="px-6 py-3 border border-white/10 text-white/40 text-xs font-bold uppercase tracking-widest hover:border-accent hover:text-accent transition-all cursor-default">Dexie.js</div>
                    <div class="px-6 py-3 border border-white/10 text-white/40 text-xs font-bold uppercase tracking-widest hover:border-accent hover:text-accent transition-all cursor-default">Vanilla JS</div>
                 </div>
            </section>

            <!-- Install -->
            <section id="install" class="py-32 px-6">
                <div class="max-w-4xl mx-auto space-y-16">
                    <div class="text-center space-y-4">
                        <h2 class="text-4xl font-bold text-accent uppercase tracking-tighter">Deploy to your device</h2>
                        <p class="text-white/30 lowercase">Zero friction. Direct installation.</p>
                    </div>

                    <div class="border border-white/10 rounded-xl overflow-hidden bg-[#050505]">
                        <div id="install-tabs" class="flex overflow-x-auto border-b border-white/10 scrollbar-none">
                            <button class="tab-btn px-10 py-6 text-[10px] font-bold uppercase tracking-[0.2em] hover:text-white transition-all border-r border-white/10" data-tab="windows">Windows Setup</button>
                            <button class="tab-btn px-10 py-6 text-[10px] font-bold uppercase tracking-[0.2em] hover:text-white transition-all border-r border-white/10" data-tab="macos">macOS Setup</button>
                            <button class="tab-btn px-10 py-6 text-[10px] font-bold uppercase tracking-[0.2em] hover:text-white transition-all border-r border-white/10" data-tab="ios">iOS Setup</button>
                            <button class="tab-btn px-10 py-6 text-[10px] font-bold uppercase tracking-[0.2em] hover:text-white transition-all border-r border-white/10" data-tab="android">Android Setup</button>
                            <button class="tab-btn px-10 py-6 text-[10px] font-bold uppercase tracking-[0.2em] hover:text-white transition-all" data-tab="linux">Linux Setup</button>
                        </div>
                        <div id="tab-content" class="p-12 min-h-[400px]"></div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="py-20 border-t border-white/5 bg-black px-6">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-10">
                <div class="space-y-2 text-center md:text-left">
                    <div class="flex items-center gap-2 justify-center md:justify-start">
                        <div class="w-1.5 h-1.5 bg-success rounded-full"></div>
                        <span class="text-accent text-xs font-bold uppercase tracking-widest">The Cave</span>
                    </div>
                    <p class="text-white/20 text-[10px] uppercase font-bold tracking-widest">© 2026 Core Protocols Inc. | Status: Optimal</p>
                </div>
                <div class="flex gap-12 text-[10px] font-bold uppercase tracking-[0.3em] text-white/30">
                    <a href="/privacy.html" class="hover:text-success transition-colors">Privacy</a>
                    <a href="/logs.html" class="hover:text-success transition-colors">Logs</a>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div id="install-modal" class="fixed inset-0 z-50 flex items-center justify-center p-6 opacity-0 pointer-events-none transition-all duration-500 scale-95">
            <div class="absolute inset-0 bg-black/95 backdrop-blur-md" id="modal-overlay"></div>
            <div class="relative w-full max-w-xl bg-black border border-white/10 p-10 ring-1 ring-white/20 shadow-[0_0_100px_rgba(230,230,250,0.1)]">
                <div id="modal-content"></div>
                <button id="close-modal" class="absolute top-8 right-8 text-white/20 hover:text-white transition-colors">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>
    </div>
</body>
</html>

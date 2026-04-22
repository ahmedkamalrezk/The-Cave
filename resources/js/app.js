import './style.css'

// --- CONSTANTS ---
const ASCII_LOGO = ` ██████╗ █████╗ ██╗   ██╗███████╗
██╔════╝██╔══██╗██║   ██║██╔════╝
██║     ███████║██║   ██║█████╗  
██║     ██╔══██║╚██╗ ██╔╝██╔══╝  
╚██████╗██║  ██║ ╚████╔╝ ███████╗
 ╚═════╝╚═╝  ╚═╝  ╚═══╝  ╚══════╝`;

const TERMINAL_COMMANDS = [
  { text: '$ todo add "Deep work session" --high', delay: 1000 },
  { text: '✓ Task added to local ledger', delay: 500, response: true },
  { text: '$ focus 25m', delay: 1200 },
  { text: '⏱ Focus mode active. Notifications silenced.', delay: 500, response: true },
  { text: '$ note "Breakthrough idea" --tag innovation', delay: 1500 },
  { text: '✓ Note synced to browser storage', delay: 500, response: true }
];

const INSTALL_DATA = {
  windows: {
    icon: '[WIN]',
    steps: [
      'Open this page in Edge or Chrome',
      'Click the install icon [+] in the address bar',
      'Click "Install" in the prompt',
      'The Cave is now in your Start Menu and taskbar ✓'
    ]
  },
  macos: {
    icon: '[MAC]',
    steps: [
      'Open this page in Chrome or Edge',
      'Click the install icon [+] in the address bar',
      'Click "Install" in the prompt',
      'The Cave is now in your Applications folder ✓'
    ]
  },
  ios: {
    icon: '[IOS]',
    steps: [
      'Open this page in Safari browser',
      'Tap the Share button [SHARE] (icon with upward arrow)',
      'Scroll down and tap "Add to Home Screen"',
      'Tap "Add" in the top right corner',
      'The Cave is now on your home screen ✓'
    ]
  },
  android: {
    icon: '[AND]',
    steps: [
      'Open this page in Chrome browser',
      'Tap the menu [MENU] in the top right',
      'Tap "Install app" or "Add to Home Screen"',
      'Tap "Install" to confirm',
      'The Cave is now on your home screen ✓'
    ]
  },
  linux: {
    icon: '[LIN]',
    steps: [
      'Open this page in Chrome or Chromium',
      'Click the install icon [+] in the address bar',
      'Click "Install" in the prompt',
      'The Cave is now available as a standalone app ✓'
    ]
  }
};

// --- LOGIC ---

// 1. ASCII Logo Reveal
function initLogo() {
  const container = document.getElementById('ascii-logo');
  if (!container) return;

  const lines = ASCII_LOGO.split('\n');
  container.innerHTML = lines.map((line, i) => 
    `<div class="logo-line" style="animation-delay: ${i * 50}ms">${line}</div>`
  ).join('');

  // CRT Flicker effect
  setTimeout(() => {
    container.classList.add('crt-flicker');
  }, lines.length * 50 + 500);
}

// 2. Typewriter Effect
async function typeWriter(commands) {
  const terminal = document.getElementById('terminal-content');
  if (!terminal) return;

  for (const cmd of commands) {
    await new Promise(r => setTimeout(r, cmd.delay));
    
    const line = document.createElement('div');
    line.className = cmd.response ? 'text-white/40 mb-2' : 'text-success mb-1';
    terminal.appendChild(line);

    if (cmd.response) {
      line.textContent = cmd.text;
    } else {
      for (let i = 0; i < cmd.text.length; i++) {
        line.textContent += cmd.text[i];
        await new Promise(r => setTimeout(r, 30 + Math.random() * 40));
      }
    }
    
    terminal.scrollTop = terminal.scrollHeight;
  }

  // Loop after delay
  setTimeout(() => {
    terminal.innerHTML = '';
    typeWriter(commands);
  }, 5000);
}

// 3. OS Detection & CTA
function detectOS() {
  const ua = navigator.userAgent;
  if (ua.includes('Windows')) return 'windows';
  if (ua.includes('Mac'))     return 'macos';
  if (ua.includes('iPhone') || ua.includes('iPad')) return 'ios';
  if (ua.includes('Android')) return 'android';
  if (ua.includes('Linux'))   return 'linux';
  return 'unknown';
}

function updateCTA() {
  const os = detectOS();
  const ctaBtn = document.getElementById('cta-hero');
  const ctaText = document.getElementById('cta-text');
  
  const labels = {
    windows: 'Install as App — Windows',
    macos: 'Install as App — macOS',
    ios: 'Add to Home Screen — iOS',
    android: 'Install as App — Android',
    linux: 'Install as App — Linux',
    unknown: 'Install The Cave'
  };

  if (ctaText) ctaText.textContent = labels[os] || labels.unknown;
  
  ctaBtn?.addEventListener('click', () => openModal(os));
}

// 4. Modal Logic
function openModal(os) {
  const modal = document.getElementById('install-modal');
  const content = document.getElementById('modal-content');
  const data = INSTALL_DATA[os] || INSTALL_DATA.windows;

  content.innerHTML = `
    <div class="flex items-center gap-4 border-b border-white/10 pb-4">
      <span class="text-4xl">${data.icon}</span>
      <div>
        <h3 class="text-xl font-bold text-accent uppercase">Install for ${os.toUpperCase()}</h3>
        <p class="text-[10px] text-white/30 tracking-widest uppercase">Platform Verified</p>
      </div>
    </div>
    <ul class="space-y-4">
      ${data.steps.map((step, i) => `
        <li class="flex gap-4 items-start">
          <span class="w-6 h-6 rounded-full bg-success/10 border border-success/20 flex items-center justify-center text-[10px] text-success shrink-0 mt-1">${i + 1}</span>
          <p class="text-gray-400 text-sm leading-relaxed">${step}</p>
        </li>
      `).join('')}
    </ul>
    ${data.command ? `
      <div class="space-y-2 pt-4">
        <p class="text-[10px] text-white/30 uppercase tracking-widest">Terminal Command</p>
        <div class="flex bg-black border border-white/10 p-3 items-center justify-between group">
          <code class="text-success text-xs font-mono truncate">${data.command}</code>
          <button class="copy-btn text-white/30 hover:text-white" onclick="navigator.clipboard.writeText('${data.command}')">
             <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
          </button>
        </div>
      </div>
    ` : ''}
    <button class="w-full py-4 bg-accent text-black font-bold uppercase tracking-widest hover:bg-white transition-all mt-4" onclick="document.getElementById('install-modal').classList.add('opacity-0', 'pointer-events-none')">
      Close Launcher
    </button>
  `;

  modal.classList.remove('opacity-0', 'pointer-events-none');
}

// 5. Tabs Logic
function initTabs() {
  const tabs = document.querySelectorAll('.tab-btn');
  const content = document.getElementById('tab-content');

  const renderTab = (os) => {
    const data = INSTALL_DATA[os];
    content.innerHTML = `
      <div class="grid md:grid-cols-2 gap-12">
        <div class="space-y-6">
          <h3 class="text-2xl font-bold text-accent uppercase flex items-center gap-3">
            <span>${data.icon}</span> ${os} Setup
          </h3>
          <ul class="space-y-4">
            ${data.steps.map((step, i) => `
              <li class="flex gap-4">
                <span class="text-success font-mono">${i + 1}.</span>
                <p class="text-gray-400 text-sm">${step}</p>
              </li>
            `).join('')}
          </ul>
        </div>
        <div class="bg-black/50 border border-white/5 p-6 rounded flex items-center justify-center min-h-[200px]">
           <div class="text-center space-y-4 opacity-50">
             <div class="w-16 h-16 border-2 border-dashed border-white/20 rounded-full mx-auto flex items-center justify-center">
               <span class="text-3xl">${data.icon}</span>
             </div>
             <p class="text-[10px] uppercase tracking-[0.2em]">Package Ready for ${os}</p>
           </div>
        </div>
      </div>
    `;
  };

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      renderTab(tab.dataset.tab);
    });
  });

  // Default tab based on OS
  const detected = detectOS();
  const defaultTab = INSTALL_DATA[detected] ? detected : 'windows';
  const activeTab = Array.from(tabs).find(t => t.dataset.tab === defaultTab);
  if (activeTab) {
    activeTab.classList.add('active');
    renderTab(defaultTab);
  }
}

// 6. Intersection Observer for Scroll Animations
function initScrollAnimations() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('reveal');
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('section, .feature-card').forEach(el => {
    el.setAttribute('data-animate', '');
    observer.observe(el);
  });
}

// 7. Modal Close
document.getElementById('modal-overlay')?.addEventListener('click', () => {
  document.getElementById('install-modal').classList.add('opacity-0', 'pointer-events-none');
});
document.getElementById('close-modal')?.addEventListener('click', () => {
  document.getElementById('install-modal').classList.add('opacity-0', 'pointer-events-none');
});
window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    document.getElementById('install-modal').classList.add('opacity-0', 'pointer-events-none');
  }
});

// --- INIT ---
document.addEventListener('DOMContentLoaded', () => {
  initLogo();
  typeWriter(TERMINAL_COMMANDS);
  updateCTA();
  initTabs();
  initScrollAnimations();
});

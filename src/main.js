const cssFiles = [
    './styles/main.css',
    './styles/components/header.css',
    './styles/components/mobile-nav.css',
    './styles/components/trending.css',
    './styles/components/trending-show.css',
    './styles/components/form.css',
    './styles/util.css'
];

cssFiles.forEach( file => {
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = file;
    document.head.appendChild(link);
});

import playerSlice from './components/player.js';

playerSlice();
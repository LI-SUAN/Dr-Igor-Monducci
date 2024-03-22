// 导航栏生成函数
function generateNavbar() {
    const navbar = document.createElement('div');
    navbar.classList.add('navbar');

    const links = [
        { text: 'Home Page', url: 'index.html' },
        { text: 'Curriculum vitae', url: 'Curriculum vitae.html' },
        { text: '-', url: '#' },
        { text: '-', url: '#' }
    ];

    links.forEach(link => {
        const a = document.createElement('a');
        a.textContent = link.text;
        a.href = link.url;
        navbar.appendChild(a);
    });

    document.body.insertBefore(navbar, document.body.firstChild);
}

// 在页面加载完成后调用生成导航栏的函数
document.addEventListener('DOMContentLoaded', generateNavbar);

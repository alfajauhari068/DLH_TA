import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.admin-sidebar');
    const shell = document.querySelector('.admin-shell');
    const overlay = document.querySelector('.admin-overlay');
    const toggleButtons = document.querySelectorAll('[data-admin-toggle-sidebar]');

    const setSidebarState = (open) => {
        if (!sidebar || !shell || !overlay) return;
        sidebar.classList.toggle('open', open);
        shell.classList.toggle('sidebar-open', open);
        overlay.classList.toggle('visible', open);
        toggleButtons.forEach((button) => button.setAttribute('aria-expanded', open ? 'true' : 'false'));
    };

    toggleButtons.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const isOpen = sidebar && sidebar.classList.toggle('open');
            setSidebarState(Boolean(isOpen));
        });
    });

    overlay.addEventListener('click', () => setSidebarState(false));

    document.addEventListener('click', (e) => {
        if (!sidebar || !shell) return;
        if (sidebar.classList.contains('open') && !e.target.closest('.admin-sidebar') && !e.target.closest('[data-admin-toggle-sidebar]')) {
            setSidebarState(false);
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            setSidebarState(false);
            document.querySelectorAll('details[open]').forEach((d) => d.removeAttribute('open'));
        }
    });
});

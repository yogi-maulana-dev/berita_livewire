    <div x-data="{ open: true }" x-init="const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    const message = urlParams.get('message');
    
    if (status && message) {
        Toastify({
            text: decodeURIComponent(message),
            duration: 5000,
            newWindow: true,
            close: true,
            gravity: 'top',
            position: 'right',
            stopOnFocus: true,
            style: {
                background: (status === 'success') ?
                    'linear-gradient(to right, #80AF81, #96C9F4)' : 'linear-gradient(to right, #C80036, #F4CE14)',
            }
        }).showToast();
    
    
        window.history.replaceState({}, '', window.location.pathname);
    }">
    </div>

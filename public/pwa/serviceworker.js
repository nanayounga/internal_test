let baseURL = '/';

self.addEventListener('push', event => {
    let json = event.data.json();

    baseURL = json.data.url;

    event.waitUntil(
        self.registration.showNotification(json.notification.title, {
            'body': json.notification.body,
            'tag': 'request',
            'actions': JSON.parse(json.data.action),
            'icon': 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWbDftD-kEKNnwISBfhwQyAVXXRu8WWedQdsGpPGnzUaTH9BdD',
            // 'requireInteraction': true // true: クリックされるまで表示し続ける
            'renotify': true
        })
    );
});

self.addEventListener('notificationclick', event => {
    if (event.action === 'select-a') {
        self.clients.openWindow('https://www.mitsue.co.jp/knowledge/blog/');
    } else if (event.action === 'select-b') {
        self.clients.openWindow('https://www.mitsue.co.jp/knowledge/blog/frontend/');
    } else {
        self.clients.openWindow(baseURL);
    }

    event.notification.close();
});
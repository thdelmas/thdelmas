const app = Vue.createApp({
    data() {
        return {
            pages: [ 
                { "title": "Resume", "url": "./assets/resume.pdf"},
                { "title": "Contribute", "url": "assets/images/contribute.png"},
                { "title": "Contact", "url": "mailto:contact@theophile.world"}
                /*
                { "title": "Art", "url": "./art"},
                { "title": "Achievements", "url": "http://theophile.world/achievements"},
                { "title": "Contribute", "url": "http://theophile.world/contribute"}
                { "title": "Work", "url": "./work"},
                { "title": "42", "url": "./42"},
                { "title": "Timeline", "url": "./timeline"},
                { "title": "Projects", "url": "./projects"},
                { "title": "Skills", "url": "./skills"},
                { "title": "Achievements", "url": "./achievements"},
                { "title": "Contact", "url": "./contact"},
                { "title": "GuestBook", "url": "./guestbook"}
                */
            ]
       }
    }
}).mount('#app')
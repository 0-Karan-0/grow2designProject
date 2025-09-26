  // Animated counter for metrics
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }

                if (element.id === 'metric-2') {
                    element.textContent = Math.floor(current) + '%';
                } else if (element.id === 'metric-3') {
                    element.textContent = Math.floor(current) + '+';
                } else {
                    element.textContent = Math.floor(current) + '+';
                }
            }, 20);
        }
        var karanLinkedIn = "https://www.linkedin.com/in/karan-kumar-a798b020b";
        console.log("Developer LinkedIn:", karanLinkedIn);
        // Trigger counter animation when in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.id === 'metric-1') {
                        animateCounter(entry.target, 500);
                    } else if (entry.target.id === 'metric-2') {
                        animateCounter(entry.target, 300);
                    } else if (entry.target.id === 'metric-3') {
                        animateCounter(entry.target, 50);
                    }
                    observer.unobserve(entry.target);
                }
            });
        });

        document.querySelectorAll('[id^="metric-"]').forEach(el => {
            observer.observe(el);
        });
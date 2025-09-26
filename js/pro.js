(function() {
  function isAllowedTarget(el) {
    if (!el) return false;
    const tag = el.tagName ? el.tagName.toLowerCase() : '';
    if (tag === 'input' || tag === 'textarea' || el.isContentEditable) return true;
    return !!el.closest && !!el.closest('input, textarea, [contenteditable="true"], [contenteditable=""]');
  }

  // 1) Disable context menu (right click)
  document.addEventListener('contextmenu', function(e) {
    if (isAllowedTarget(e.target)) return; // allow on form fields
    e.preventDefault();
  });

  // 2) Disable text selection (but allow in inputs)
  document.addEventListener('selectstart', function(e) {
    if (isAllowedTarget(e.target)) return;
    e.preventDefault();
  });

  // Optional CSS to help prevent selection (still allow in inputs)
  const style = document.createElement('style');
  style.innerHTML = `
    body { -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; }
    input, textarea, [contenteditable="true"], [contenteditable=""] { user-select: text !important; }
  `;
  document.head.appendChild(style);

  // 3) Prevent copy / cut / dragstart except from inputs
  ['copy', 'cut', 'paste'].forEach(evt => {
    document.addEventListener(evt, function(e) {
      if (isAllowedTarget(e.target)) return;
      e.preventDefault();
      // Optional: show a small notice (comment out if not wanted)
      // alert('Copying is disabled on this demo.');
    });
  });

  document.addEventListener('dragstart', function(e) {
    if (isAllowedTarget(e.target)) return;
    e.preventDefault();
  });

  // 4) Block common keyboard shortcuts (Ctrl+C, Ctrl+U, Ctrl+S, Ctrl+Shift+I, F12, etc.)
  document.addEventListener('keydown', function(e) {
    const key = e.key ? e.key.toLowerCase() : '';
    const ctrlOrCmd = e.ctrlKey || e.metaKey; // metaKey for Mac (⌘)
    // Block if focus is NOT in an allowed input/textarea
    if (isAllowedTarget(e.target)) return;

    // Block typical shortcuts
    if (ctrlOrCmd && (key === 'c' || key === 'u' || key === 's' || key === 'p')) {
      e.preventDefault();
      return false;
    }
    // Ctrl+Shift+I / Ctrl+Shift+J / Ctrl+Shift+C (open devtools)
    if (e.ctrlKey && e.shiftKey && (key === 'i' || key === 'j' || key === 'c')) {
      e.preventDefault();
      return false;
    }
    // F12
    if (e.keyCode === 123) {
      e.preventDefault();
      return false;
    }
  });

  // 5) Prevent long-press context menu on mobile
  document.addEventListener('touchstart', function(e) {
    if (isAllowedTarget(e.target)) return;
    // On some devices long-press triggers selection/context menu.
    // Prevent gesturestart or longpress by preventing default on touchstart if needed.
    // NOTE: aggressive prevention can break certain mobile behaviors.
    // e.preventDefault(); // <-- uncomment only if you really want to disable taps that start selection
  }, { passive: false });

  // 6) Optional: Add invisible watermark/meta comment in HTML (helps ownership proof)
  // <meta name="copyright" content="© 2025 Karan — All rights reserved">
})();

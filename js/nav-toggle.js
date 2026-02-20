(function () {
	const SELECTOR = "[data-target][data-collapse]";

	function setState(btn, isOpen, targetEl) {
		btn.setAttribute("data-collapse", isOpen ? "open" : "collapsed");
		btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
		if (targetEl) {
			targetEl.classList.toggle("open", isOpen);
			if (isOpen) {
				targetEl.setAttribute("aria-hidden", "false");
			} else {
				targetEl.setAttribute("aria-hidden", "true");
			}
		}
	}

	document.addEventListener("DOMContentLoaded", function () {
		document.querySelectorAll(SELECTOR).forEach(function (btn) {
			const selector =
				btn.getAttribute("data-target") ||
				"#" + (btn.getAttribute("aria-controls") || "");
			const targetEl = selector ? document.querySelector(selector) : null;
			const initialOpen =
				btn.getAttribute("aria-expanded") === "true" ||
				btn.getAttribute("data-collapse") === "open";
			setState(btn, initialOpen, targetEl);
			btn.addEventListener("click", function (e) {
				const isOpen = btn.getAttribute("aria-expanded") === "true";
				setState(btn, !isOpen, targetEl);
			});
		});
	});
})();

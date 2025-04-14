document.addEventListener("livewire:load", function () {
    Livewire.hook("message.failed", (message, component) => {
        console.warn("Livewire request failed, but ignored:", message);
    });
});

XMLHttpRequest.prototype.realSend = XMLHttpRequest.prototype.send;
XMLHttpRequest.prototype.send = function(body) {
    this.addEventListener("readystatechange", function () {
        if (this.readyState === 4) {
            try {
                JSON.parse(this.responseText);
            } catch (error) {
                console.warn("Invalid JSON response ignored:", error);
            }
        }
    });
    this.realSend(body);
};

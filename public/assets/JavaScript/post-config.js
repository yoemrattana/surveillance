app.user = '';

window.onpopstate = function () {
	history.forward();
};
history.pushState(null, null);

app.vm = typeof viewModel === 'function' ? new viewModel() : {};
ko.applyBindings(app.vm);

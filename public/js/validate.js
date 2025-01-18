const $queryAll = (selector, context = document) => [...context.querySelectorAll(selector)];

$queryAll("form[validate]").forEach(form => {
    form.addEventListener("submit", e => {
        e.preventDefault();
        Neo.Validator.validate(form, {
            ...($queryAll("[rules]", form).reduce((carry, item) => {
                carry.rules[item.name] = (item.getAttribute("rules") || "").split("|");
                carry.message.failure[item.name] = JSON.parse(item.getAttribute("errors") || "");
                return carry;
            }, { rules: {}, message: { failure: {} } })),
            failure(field, __, message) {
                Neo.Toaster.toast(message, "error");
                field.parentElement.classList.add("outline", "outline-2", "-outline-offset-2", "outline-red-400");
            },
            success(field) {
                field.parentElement.classList.remove("outline", "outline-2", "-outline-offset-2", "outline-red-400");
            },
            execute() {
                form.submit();
            }
        });
    });
});
class Validation {
    static initSignIn() {
        Codebase.helpers("jq-validation");
        $(".form-signin").validate({
            rules: {
                "email": {
                    required: true,
                    minlength: 3,
                    email: true
                },
                "password": {
                    required: true,
                    minlength: 5
                },
            },
            messages: {
                "email": {
                    required: "Please enter an email",
                    minlength: "Your email must consist of at least 3 characters",
                    email: "Please enter a valid email address"
                },
                "password": {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                },
            },
        });
    }
}

Codebase.onLoad(() => Validation.initSignIn());

<script>
    function generatePIN() {
        return Math.floor(1000 + Math.random() * 9000);
    }
    function generateLetter() {
        var letters = "KGU";
        return letters.charAt(Math.floor(Math.random() * letters.length));
    }
    function updateGeneratedPassword() {
        var generatedPIN = generatePIN();
        var generatedLetter = generateLetter();
        var generatedPassword = generatedPIN + generatedLetter;

        $("#password").val(generatedPassword); 
    }
    $("#stud_id").on("input", updateGeneratedPassword);
    updateGeneratedPassword();
</script>


<script>
$(document).ready(function () {
    $("#checkStudentForm").submit(function (e) {
        e.preventDefault();
        var studID = $("#studID_no").val();

        $.ajax({
            type: "POST",
            url: "{{ route('checkStudent') }}",
            data: {
                _token: "{{ csrf_token() }}",
                studID: studID
            },
            success: function (response) {
                if (response.message === 'Student is Enrolled') {
                    $("#secondCard").css("display", "block");
                    $("#stud_id").val(response.data.stud_id);
                    $("#fullname").val(response.data.fullname);
                    $("#idx").val(response.data.id);
                } else {
                    $("#secondCard").css("display", "none");
                    $("#fname").val('');
                    var notFoundAlert = '<div class="alert alert-danger" role="alert">Student data not found.</div>';
                    $("#notification").html(notFoundAlert);
                }
                var validationAlert = '<div class="alert alert-success" role="alert">' + response.message + '</div>';
                $("#validation_result").html(validationAlert);
                $(".alert").delay(2500).fadeOut(3000);
            },
            error: function (xhr, status, error) {
                console.error(error);
                $("#secondCard").css("display", "none");
                $("#fname").val('');
                var errorAlert = '<div class="alert alert-danger" role="alert">You\'re not enrolled this semester.</div>';
                $("#notification").html(errorAlert);
                $(".alert").delay(2500).fadeOut(5000);
            }
        });
    });
});
</script>

<script>
    $(document).ready(function () {
        $("#success-alert").delay(2500).fadeOut(4000);
        $("#error-alert").delay(2500).fadeOut(4000);
    });
</script>

{{-- <script>
    @if(Session::has('message'))
        toastr.options = {
            "closeButton":true,
            "progressBar":true,
            'positionClass': 'toast-bottom-right'
        }
    toastr.success("{{ session('message') }}")
    @endif

    @if(Session::has('error'))
        toastr.options = {
            "closeButton":true,
            "progressBar":true,
            'positionClass': 'toast-bottom-right'
        }
    toastr.error("{{ session('error') }}")
    @endif
</script> --}}
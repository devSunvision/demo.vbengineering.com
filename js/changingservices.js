$(document).ready(function () {
    All();
    function All() {
       
            $(".electricaldiv").show();
            $(".mechanicaldiv").show();
            $(".auditsdiv").show();
            $(".trainingsdiv").show();
            $(".divheading").show();
       
    }
    $(".All").click(function () {
        All();
    });
    $(".electrical").click(function () {
        $(".electricaldiv").show();
        $(".mechanicaldiv").hide();
        $(".auditsdiv").hide();
        $(".trainingsdiv").hide();
        $(".divheading").hide();

    });
    $(".mechanical").click(function () {
        $(".electricaldiv").hide();
        $(".mechanicaldiv").show();
        $(".auditsdiv").hide();
        $(".trainingsdiv").hide();
        $(".divheading").hide();

    });
    $(".audits").click(function () {
        $(".electricaldiv").hide();
        $(".mechanicaldiv").hide();
        $(".trainingsdiv").hide();
        $(".auditsdiv").show();
        $(".divheading").hide();
    });
    $(".training").click(function () {
        $(".electricaldiv").hide();
        $(".mechanicaldiv").hide();
        $(".auditsdiv").hide();
        $(".trainingsdiv").show();
        $(".divheading").hide();

    });
});
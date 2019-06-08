/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
/* Application  Filtering */
$().button("toggle");

var results = $("#app-listings");

$(".toggle-filter").on("click", function () {
    $("#app-search-form").slideToggle(800);
});

$(".favourite").on("click", function () {
    $(this).toggleClass("fave");
    $(this).toggleClass("fas");
    $(this).toggleClass("far");

    let jobID = $(this).data("jobid");
    let status = $(this).hasClass("fave");
    // $.ajax({
    //     method: "POST",
    //     url: "setFavourite.php",
    //     data: {
    //         id: jobID,
    //         fave: status
    //     }
    // });
});

$("#app-search-form").on("change", function () {
    let job_titles = [];
    let cities = [];
    let salary_min = salary_max = 0;
    let query = "";
    $(".job_filter").each(function () {
        if ($(this).prop("checked") == true) {
            job_titles.push($(this).data("jobtitle"));
        }
    });

    $(".city_filter").each(function () {
        if ($(this).prop("checked") == true) {
            cities.push($(this).data("city"));
        }
    });

    if ($("#app-searchbar").val() !== "") {
        query = $("#app-searchbar").val();
    }

    if ($("#job-salary-min").val() !== "") {
        salary_min = $("#job-salary-min").val();
    }

    if ($("#job-salary-max").val() !== "" && parseInt($("#job-salary-max").val()) >= parseInt($("#job-salary-min").val())) {
        salary_max = $("#job-salary-max").val();
    } else {
        salary_max = 1000000;
    }
    console.log("Search Bar: " + query);
    console.log("City: " + cities);
    console.log("Job Title: " + job_titles);
    console.log("Salary Range from $" + salary_min + "/hr to $" + salary_max + "/hr");
    // $.ajax({
    //     method: "POST",
    //     url: "filterResults.php",
    //     data: {
    //         job_titles: job_titles,
    //         cities: cities,
    //         minSalary: salary_min,
    //         maxSalary: salary_max
    //     },
    //     success: function (data) {
    //         $("")
    //     }
    // })
});

let app_compare = [];
$("#app-listings").on("change", function () {
    app_compare = [];
    $(".compare-options").each(function () {
        if ($(this).prop("checked") == true) {
            app_compare.push($(this).data("jobid"));
        }
    });
});

$(".compare-option").on("click", function () {
    $(".compare-option").each(function () {
        if ($(this).find("input").prop("checked") == true) {
            $(this).addClass("selected-option");
        } else {
            $(this).removeClass("selected-option");
        }
    })
});

$(".back-btn").on("click", function () {
    window.location.href = "/dashboard";
})

$(".compare-button").on("click", function () {
    if (app_compare.length > 3) {
        $("#errors").html("Only 3 Applications can be compared at a time");
    } else if (app_compare.length < 2) {
        $("#errors").html("Must have at least 2 application selected to compare");
    } else {
        $("#errors").empty();
        // $.ajax({
        //     method: "POST",
        //     url: "/dashboard/applications/compare/",
        //     data: app_compare,
        //     success: function (data) {
        //         console.log(app_compare);

        //     },
        //     error: function (data) {
        //         console.log(data);
        //     }
        // });
    }
});

$(".add-app-button").on("click", function () {
    window.location.href = "/dashboard/applications/create";
});

/* Application Compare */
let jobScore1 = jobScore2 = jobScore3 = is_highest = highestScore = 0;
$(".compare-row").on("change", function () {
    jobScore1 = jobScore2 = jobScore3 = 0;
    $(".selected-option").each(function () {
        let choice = $(this).find("input").data("jobid");
        if (choice === 1) {
            jobScore1++;
        }
        if (choice === 2) {
            jobScore2++;
        }
        if (choice === 3) {
            jobScore3++;
        }
        highestScore = Math.max(jobScore1, jobScore2, jobScore3);

    });
    if (jobScore1 === highestScore) {
        $(".job1").addClass("highest");
        is_highest = 1;
    } else {
        $(".job1").removeClass("highest");
    }

    if (jobScore2 === highestScore) {
        $(".job2").addClass("highest");
        is_highest = 2;
    } else {
        $(".job2").removeClass("highest");
    }

    if (jobScore3 === highestScore) {
        $(".job3").addClass("highest");
        is_highest = 3;
    } else {
        $(".job3").removeClass("highest");
    }
    $(".compare-score1").html(jobScore1);
    $(".compare-score2").html(jobScore2);
    $(".compare-score3").html(jobScore3);
});

$(".save-btn").on("click", function (e) {
    e.preventDefault();

    window.location.href = "/dashboard";
    return false;
})

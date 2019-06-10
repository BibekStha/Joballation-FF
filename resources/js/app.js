/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
/* Application  Filtering */
$().button("toggle");

var results = $("#app-listings");

function updateFavourite(jobID, status) {
    $.ajax({
        method: "POST",
        url: "/dashboard/applications/favourite",
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "id": jobID,
            "fave": status
        },
        success: function (data) {
            console.log(data); 
            window.location.replace = "/dashboard";
        },
        error: function (data) {
            console.log(data['responseJSON']);
        }
    });
}

$(".toggle-filter").on("click", function () {
    $("#app-search-form").slideToggle(800);
});

$(document).on("click", ".favourite", function () {
    $(this).toggleClass("fave");
    $(this).toggleClass("fas");
    $(this).toggleClass("far");

    let jobID = $(this).data("jobid");
    let status = $(this).hasClass("fave");

    updateFavourite(jobID, status);
});

$("#app-search-form").on("change", function () {
    let query = [];
    $(".job_filter").each(function () {
        if ($(this).prop("checked") == true) {
            query.push($(this).data("jobtitle"));
        }
    });

    $(".city_filter").each(function () {
        if ($(this).prop("checked") == true) {
            query.push($(this).data("city"));
        }
    });

    $(".status_filter").each(function(){
        if ($(this).prop("checked") == true) {
            query.push($(this).data("status"));
        }
    });
    $.ajax({
        method: "POST",
        url: "/dashboard/applications/filter",
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "search": query,
        },
        success: function (data) {
            $("tbody").html(data);
            console.log(data);
        },
        error: function (data) {
            console.log(data['responseJSON']);
        }
    })
});

let app_compare = [];
$(document).on("change", "#app-listings", function () {
    app_compare = [];
    $(".compare-options").each(function () {
        if ($(this).prop("checked") == true) {
            app_compare.push($(this).data("jobid"));
        }
    });
});

$(document).on("click", ".compare-option", function () {
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

$(".compare-button").on("click", function (e) {
    if (app_compare.length > 3) {
        $("#errors").html("Only 3 Applications can be compared at a time");
        e.preventDefault();
    } else if (app_compare.length < 2) {
        $("#errors").html("Must have at least 2 application selected to compare");
        e.preventDefault();
    } else {
        $("#errors").empty();
    }
});

$(".add-app-button").on("click", function () {
    window.location.href = "/dashboard/applications/create";
});

/* Application Compare */
let jobScore1 = jobScore2 = jobScore3 = highestScore = 0;
let addFave = [];
$(".compare-row").on("change", function () {
    jobScore1 = jobScore2 = jobScore3 = 0;
    $(".selected-option").each(function () {
        let choice = $(this).find("input").data("jobid");
        if (choice === $(".compare-score1").data("jobid")) {
            jobScore1++;
        }
        if (choice === $(".compare-score2").data("jobid")) {
            jobScore2++;
        }
        if (choice === $(".compare-score3").data("jobid")) {
            jobScore3++;
        }
        highestScore = Math.max(jobScore1, jobScore2, jobScore3);

    });
    if (jobScore1 === highestScore) {
        $(".job1").addClass("highest");
    } else {
        $(".job1").removeClass("highest");
    }

    if (jobScore2 === highestScore) {
        $(".job2").addClass("highest");
    } else {
        $(".job2").removeClass("highest");
    }

    if (jobScore3 === highestScore) {
        $(".job3").addClass("highest");
    } else {
        $(".job3").removeClass("highest");
    }
    $(".compare-score1").html(jobScore1);
    $(".compare-score2").html(jobScore2);
    $(".compare-score3").html(jobScore3);
});

// $(".save-btn").on("click", function (e) {
//     e.preventDefault();

//     $(".score-container").each(function () {
//         let status = $(this).hasClass("highest");
//         let appID = $(this).find("span[class*='compare'").data("jobid");
//         updateFavourite(appID, status);
//     });
//     // window.location.replace = "/dashboard";
//     return false;
// })

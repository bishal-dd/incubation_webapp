<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController\LoginController;
use App\Http\Controllers\SliderController\SliderController;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\AdvisoryController\AdvisoryController;
use App\Http\Controllers\IncubatesController\IncubatesController;
use App\Http\Controllers\MentorController\MentorController;
use App\Http\Controllers\StakeholderController\StakeholderController;
use App\Http\Controllers\EventController\EventController;
use App\Http\Controllers\FeedbackController\FeedbackController;
use App\Http\Controllers\ApplicationController\ApplicationController;
use App\Http\Controllers\FacilityController\FacilityController;

Route::get("/", [HomeController::class, "home"])->name("home");

// Login Routes
Route::get("/login", function () {
    return view("user/login/login");
});

Route::post("/userlogin", [LoginController::class, "userlogin"])->name(
    "userlogin"
);
///////

// Application Routes
Route::get("/application", function () {
    return view("user/application/application");
});

Route::get("/application_process", function () {
    return view("user/application_process/application_process");
});

Route::post("/submit_application", [
    ApplicationController::class,
    "submit_application",
])->name("submit_application");

///////
Route::post("/give_feedback", [
    FeedbackController::class,
    "give_feedback",
])->name("give_feedback");

Route::get("/stakeholder", [StakeholderController::class, "stakeholder"])->name(
    "stakeholder"
);

Route::get("/mentor", function () {
    return view("user/mentor/mentor");
});

Route::get("/about", function () {
    return view("user/about/about");
});

Route::get("/advisory", [AdvisoryController::class, "advisory"])->name(
    "advisory"
);

Route::get("/event", [EventController::class, "event"])->name("event");
Route::get("/event_details/{id}", [
    EventController::class,
    "event_details",
])->name("event_details");

Route::get("/incubates", [IncubatesController::class, "incubates"])->name(
    "incubates"
);

// facilities

Route::get("/facilities", [FacilityController::class, "facilities"])->name(
    "facilities"
);

Route::group(["middleware" => ["admin"]], function () {
    Route::get("/dashboard", [HomeController::class, "dashboard"])->name(
        "dashboard"
    );
    Route::get("/dashboard/add_about", function () {
        return view("admin/add_about/add_about");
    });

    // Admin Functions
    Route::get("/dashboard/add_admin", [
        LoginController::class,
        "get_admin",
    ])->name("get_admin");

    Route::post("/dashboard/add_admin", [
        LoginController::class,
        "add_admin",
    ])->name("add_admin");

    Route::put("/dashboard/update_admin", [
        LoginController::class,
        "update_admin",
    ])->name("update_admin");

    // Slider functions
    Route::post("/dashboard/add_slider", [
        SliderController::class,
        "add_slider",
    ])->name("add_slider");

    Route::get("/dashboard/add_slider_image", [
        SliderController::class,
        "get_slider",
    ])->name("get_slider");

    Route::post("/dashboard/delete_slider/{id}", [
        SliderController::class,
        "delete_slider",
    ])->name("delete_slider");

    //Advisory Functions

    Route::post("/dashboard/add_advisor", [
        AdvisoryController::class,
        "add_advisor",
    ])->name("add_advisor");

    Route::post("/dashboard/edit_advisor", [
        AdvisoryController::class,
        "edit_advisor",
    ])->name("edit_advisor");

    Route::get("/dashboard/add_advisory", [
        AdvisoryController::class,
        "get_advisor",
    ])->name("get_advisor");

    Route::post("/dashboard/delete_advisor/{id}", [
        AdvisoryController::class,
        "delete_advisor",
    ])->name("delete_advisor");

    //Incubates Functions

    Route::post("/dashboard/add_incubates", [
        IncubatesController::class,
        "add_incubates",
    ])->name("add_incubates");

    Route::post("/dashboard/edit_incubates", [
        IncubatesController::class,
        "edit_incubates",
    ])->name("edit_incubates");

    Route::post("/dashboard/delete_incubates/{id}", [
        IncubatesController::class,
        "delete_incubates",
    ])->name("delete_incubates");

    Route::get("/dashboard/add_incubates", [
        IncubatesController::class,
        "get_incubates",
    ])->name("get_incubates");

    // Mentor Functions
    Route::get("/dashboard/add_mentor", [
        MentorController::class,
        "get_mentor",
    ])->name("get_mentor");

    Route::post("/dashboard/add_mentor", [
        MentorController::class,
        "add_mentor",
    ])->name("add_mentor");

    Route::post("/dashboard/edit_mentor", [
        MentorController::class,
        "edit_mentor",
    ])->name("edit_mentor");

    Route::post("/dashboard/delete_mentor/{id}", [
        MentorController::class,
        "delete_mentor",
    ])->name("delete_mentor");

    //Stakeholder Functions

    Route::get("/dashboard/add_stakeholder", [
        StakeholderController::class,
        "get_stakeholder",
    ])->name("get_stakeholder");

    Route::post("/dashboard/add_stakeholder", [
        StakeholderController::class,
        "add_stakeholder",
    ])->name("add_stakeholder");

    Route::post("/dashboard/edit_stakeholder", [
        StakeholderController::class,
        "edit_stakeholder",
    ])->name("edit_stakeholder");

    Route::post("/dashboard/delete_stakeholder/{id}", [
        StakeholderController::class,
        "delete_stakeholder",
    ])->name("delete_stakeholder");

    // Event Functions
    Route::get("/dashboard/add_event", [
        EventController::class,
        "get_event",
    ])->name("get_event");

    Route::post("/dashboard/add_event", [
        EventController::class,
        "add_event",
    ])->name("add_event");

    Route::post("/dashboard/edit_event", [
        EventController::class,
        "edit_event",
    ])->name("edit_event");

    Route::post("/dashboard/delete_event/{id}", [
        EventController::class,
        "delete_event",
    ])->name("delete_event");

    // FeedBack Functions

    Route::get("/dashboard/view_feedback", [
        FeedbackController::class,
        "view_feedback",
    ])->name("viewFeedback");

    //Application admin routes

    Route::get("/dashboard/view_application", [
        ApplicationController::class,
        "view_application",
    ])->name("view_application");

    // Facilities Admin Routes

    Route::get("/dashboard/add_facilities", [
        FacilityController::class,
        "get_facilities",
    ])->name("get_facilities");

    Route::post("/dashboard/add_facilities", [
        FacilityController::class,
        "add_facilities",
    ])->name("add_facilities");

    Route::post("/dashboard/edit_facilities", [
        FacilityController::class,
        "edit_facilities",
    ])->name("edit_facilities");

    Route::post("/dashboard/delete_facilities/{id}", [
        FacilityController::class,
        "delete_facilities",
    ])->name("delete_facilities");

    Route::get("/logout", [LoginController::class, "logout"])->name("logout");
});

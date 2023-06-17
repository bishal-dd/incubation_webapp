<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController\LoginController;
use App\Http\Controllers\SliderController\SliderController;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\AdvisoryController\AdvisoryController;

Route::get("/", [HomeController::class, "home"])->name("home");

Route::get("/login", function () {
    return view("user/login/login");
});

Route::post("/userlogin", [LoginController::class, "userlogin"])->name(
    "userlogin"
);

Route::get("/advisory", function () {
    return view("user/advisory/advisory");
});

Route::get("/mentor", function () {
    return view("user/mentor/mentor");
});

Route::get("/about", function () {
    return view("user/about/about");
});

Route::get("/advisory", function () {
    return view("user/advisory/advisory");
});
Route::get("/event", function () {
    return view("user/event/event");
});
Route::get("/incubates", function () {
    return view("user/incubates/incubates");
});

Route::group(["middleware" => ["admin"]], function () {
    Route::get("/dashboard", function () {
        return view("admin/dashboard/dashboard");
    });
    Route::get("/dashboard/add_advisory", function () {
        return view("admin/add_advisory/add_advisory");
    });
    Route::get("/dashboard/add_about", function () {
        return view("admin/add_about/add_about");
    });

    Route::get("/dashboard/add_incubates", function () {
        return view("admin/add_incubates/add_incubates");
    });
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
    Route::get("/dashboard/add_stakeholder", function () {
        return view("admin/add_stakeholder/add_stakeholder");
    });
    Route::get("/stakeholder", function () {
        return view("user/stakeholder/stakeholder");
    });

    Route::get("/dashboard/add_mentor", function () {
        return view("admin/add_mentor/add_mentor");
    });
    Route::get("/dashboard/add_event", function () {
        return view("admin/add_event/add_event");
    });

    Route::get("/dashboard/view_feedback", function () {
        return view("admin/view_feedback/view_feedback");
    });

    // Slider functions
    Route::post("/dashboard/add_slider", [
        SliderController::class,
        "add_slider",
    ])->name("add_slider");

    Route::get("/dashboard/add_slider_image", [
        SliderController::class,
        "get_slider",
    ])->name("get_slider");

    //Advisory Functions

    Route::post("/dashboard/add_advisor", [
        AdvisoryController::class,
        "add_advisor",
    ])->name("add_advisor");

    Route::get("/dashboard/add_advisory", [
        AdvisoryController::class,
        "get_advisor",
    ])->name("get_advisor");

    //Incubates Functions

    Route::post("/dashboard/add_incubates", [
        IncubatesController::class,
        "add_incubates",
    ])->name("add_incubates");

    Route::get("/dashboard/add_incubates", [
        IncubatesController::class,
        "get_incubates",
    ])->name("get_incubates");

    //Stakeholder Functions

    Route::post("/dashboard/add_stakeholder", [
        StakeholderController::class,
        "add_stakeholder",
    ])->name("add_stakeholder");

    Route::get("/logout", [LoginController::class, "logout"])->name("logout");
});

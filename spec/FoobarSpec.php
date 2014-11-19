<?php
require 'vendor/autoload.php';
require 'include/expect.php';

describe("Foo bar", function() {

    it("pass", function() {
        expect(1)->to->be->equal(1);
    });

    it("fails", function() {
        expect(false)->to->be->ok();
    });
});
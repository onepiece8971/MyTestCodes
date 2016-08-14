describe("A suite of basic functions", function() {
    it("reverse word",function(){
        expect("abcdef").toEqual(reverse("fedcba"));
        expect("Conan").toEqual(reverse("nanoC"));
    });
});
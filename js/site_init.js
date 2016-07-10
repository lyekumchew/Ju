$(function(){

    var siteInit = new SiteInit({
        "searchButton" : ".toggle-search",
        "searchArea" : ".site-search"
    });

});

var SiteInit = function(){

    this.init.apply(this, arguments)

};

SiteInit.prototype = {

    init : function(args){
        var _self = this;
        var _animationRate = 300;
        this.setObject(args);
        this.initSearchArea();
        this.clickSearchBtn(_self, _animationRate);
    },
    setObject : function(args){
        this.$contentArea = $(args.contentArea);
        this.$searchButton = $(args.searchButton);
        this.$searchArea = $(args.searchArea);
    },

    initSearchArea : function(){
        this.$searchArea.find('input[type="search"]').attr('type', 'text');
    },
    clickSearchBtn : function(_self, _animationRate){
        this.$searchButton.click(function(e){
            e.preventDefault();
            _self.$searchArea.toggleClass('active');
        });
    }

};
jQuery.fn.extend({
    getPath: function () {
        var path, node = this;
        while (node.length) {
            var realNode = node[0], name = realNode.localName;
            if (!name) break;
            name = name.toLowerCase();

            var parent = node.parent();

            var sameTagSiblings = parent.children(name);
            if (sameTagSiblings.length > 1) {
                var allSiblings = parent.children();
                var index = allSiblings.index(realNode) + 1;
                if (index > 1) {
                    name += ':nth-child(' + index + ')';
                }
            }

            path = name + (path ? '>' + path : '');
            node = parent;
        }

        return path;
    }
});
(function ($, window, document, undefined) {
    var pluginName = 'sidebarOpener',
        defaults = {};

    function Plugin(element, options) {
        this.element = $(element);
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype = {
        init: function () {
            if (typeof (Storage) !== "undefined") {
                this.bindListeners();
                this.actualizeTree();
            }
        },
        bindListeners: function () {
            this.element.find('.treeview').click({
                actualizer: this.actualizeTree.bind(this)
            }, this.spyHandler);
        },
        actualizeTree: function () {
            this.element.find('.treeview').each(function () {
                const elem = $(this);
                if (localStorage[elem.getPath()]) {
                    elem.addClass('active');
                }
            });
        },
        spyHandler: function (evt) {
            const elem = $(this), path = elem.getPath();
            if (localStorage[path]) {
                localStorage.removeItem(path);
            } else {
                localStorage.setItem(path, true);
            }
            evt.data.actualizer();
        }
    };

    $.fn[pluginName] = function (options) {
        this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
            }
        });
        return this;
    };
})(jQuery, window, document);

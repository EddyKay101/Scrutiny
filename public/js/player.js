;
(function (a) {
    if (typeof define === "function" && define.amd) {
        define(["jquery"], a)
    } else {
        if (typeof exports === "object") {
            a(require("jquery"))
        } else {
            a(jQuery)
        }
    }
}(function (a) {
    var c = /\+/g;

    function g(i) {
        return b.raw ? i : encodeURIComponent(i)
    }

    function h(i) {
        return b.raw ? i : decodeURIComponent(i)
    }

    function f(i) {
        return g(b.json ? JSON.stringify(i) : String(i))
    }

    function e(j) {
        if (j.indexOf('"') === 0) {
            j = j.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\")
        }
        try {
            j = decodeURIComponent(j.replace(c, " "));
            return b.json ? JSON.parse(j) : j
        } catch (i) { }
    }

    function d(i, j) {
        var k = b.raw ? i : e(i);
        return a.isFunction(j) ? j(k) : k
    }
    var b = a.cookie = function (s, q, p) {
        if (arguments.length > 1 && !a.isFunction(q)) {
            p = a.extend({}, b.defaults, p);
            if (typeof p.expires === "number") {
                var m = p.expires,
                    o = p.expires = new Date();
                o.setTime(+o + m * 86400000)
            }
            return (document.cookie = [g(s), "=", f(q), p.expires ? "; expires=" + p.expires.toUTCString() : "", p.path ? "; path=" + p.path : "", p.domain ? "; domain=" + p.domain : "", p.secure ? "; secure" : ""].join(""))
        }
        var v = s ? undefined : {};
        var k = document.cookie ? document.cookie.split("; ") : [];
        for (var u = 0, w = k.length; u < w; u++) {
            var r = k[u].split("=");
            var n = h(r.shift());
            var j = r.join("=");
            if (s && s === n) {
                v = d(j, q);
                break
            }
            if (!s && (j = d(j)) !== undefined) {
                v[n] = j
            }
        }
        return v
    };
    b.defaults = {};
    a.removeCookie = function (j, i) {
        if (a.cookie(j) === undefined) {
            return false
        }
        a.cookie(j, "", a.extend({}, i, {
            expires: -1
        }));
        return !a.cookie(j)
    }
}));;
(function ($) {
    "use strict";
    $(document).ready(function () {
        $('.contro-down-player').click(function () {
            $('.footer-player').addClass('contro-play');
            $('body').addClass('no_padding');
            $(this).addClass('contro_hide');
            $('.contro-up-player').addClass('contro_show');
            $.cookie('check-contro-class2', 'yes', {
                expires: 360 * 10,
                path: "/"
            });
        });
        $('.contro-up-player').click(function () {
            $('.footer-player').removeClass('contro-play');
            $('body').removeClass('no_padding');
            $('.contro-down-player').removeClass('contro_hide');
            $(this).removeClass('contro_show');
            $.removeCookie('check-contro-class2', {
                path: '/'
            });
        });
        if ($.cookie('check-contro-class2') == 'yes') {
            $('.footer-player').addClass('contro-play');
            $('body').addClass('no_padding');
            $('.contro-down-player').addClass('contro_hide');
            $('.contro-up-player').addClass('contro_show');
        } else {
            $('.footer-player').removeClass('contro-play');
            $('body').removeClass('no_padding');
            $('.contro-down-player').removeClass('contro_hide');
            $('.contro-up-player').removeClass('contro_show');
        }
        var save_track = function (el) {
            var songs = [];
            if ($.cookie('noo-playlist')) {
                songs = $.parseJSON($.cookie('noo-playlist'));
            }
            var index = $.inArray(el.id, songs);
            if (index == -1) {
                songs.push(el.id);
                $.cookie('noo-playlist', JSON.stringify(songs), {
                    expires: 360 * 10,
                    path: "/"
                });
            }
        };
        var remove_track = function (track_id) {
            var songs = [];
            if ($.cookie('noo-playlist')) {
                songs = $.parseJSON($.cookie('noo-playlist'));
            }
            var index = $.inArray(track_id, songs);
            if (index > -1) {
                songs.splice(index, 1);
            }
            $.cookie('noo-playlist', JSON.stringify(songs), {
                expires: 360 * 10,
                path: "/"
            });
        };
        var remove_all = function () {
            pause_track();
            $('.footer-player').find('li.album-playlist-item').remove();
            $.removeCookie('noo-playlist', {
                path: '/'
            });
            $.removeCookie('playing-data', {
                path: '/'
            });
        };
        var save_playing_song = function (track_id) {
            var songs = [];
            if ($.cookie('noo-playlist')) {
                songs = $.parseJSON($.cookie('noo-playlist'));
            }
            var index = $.inArray(track_id, songs);
            if (index > -1) {
                var old_playing = $.parseJSON($.cookie('playing-data'));
                if (!$.cookie('playing-data') || old_playing.song != track_id) {
                    var playing = {
                        song: track_id,
                        time: 0,
                        status: false
                    };
                    $.cookie('playing-data', JSON.stringify(playing), {
                        expires: 360 * 10,
                        path: "/"
                    });
                }
            }
        };
        var save_current_time = function (time) {
            if ($.cookie('noo-playlist') && $.cookie('playing-data')) {
                var playing = $.parseJSON($.cookie('playing-data'));
                playing.time = time;
                $.cookie('playing-data', JSON.stringify(playing), {
                    expires: 360 * 10,
                    path: "/"
                });
            }
        };
        var save_current_play_status = function (status) {
            if ($.cookie('noo-playlist') && $.cookie('playing-data')) {
                var playing = $.parseJSON($.cookie('playing-data'));
                playing.status = status;
                $.cookie('playing-data', JSON.stringify(playing), {
                    expires: 360 * 10,
                    path: "/"
                });
            }
        };
        var get_playing_song = function () {
            var songs = [];
            if ($.cookie('noo-playlist')) {
                songs = $.parseJSON($.cookie('noo-playlist'));
                if ($.cookie('playing-data')) {
                    var playing = $.parseJSON($.cookie('playing-data'));
                    var current_song = playing.song;
                    var index = $.inArray(current_song, songs);
                    if (index > -1) {
                        return songs[index];
                    }
                }
                return songs[0];
            }
            return false;
        };
        var add_to_playlist = function (el) {
            if (typeof el.file !== "undefined" && el.file) {
                var html = '<li id="' + el.id + '" class="album-playlist-item"><span class="playlist-play"><a href="' + el.file + '"><i class="fa fa-play"></i></a></span><span class="playlist-release  hidden-xs"><a href="' + el.url + '">' + el.album + '</a></span><span class="playlist-tract"><a href="' + el.url + '">' + el.name + '</a><small>' + el.artist + '</small></span><span class="playlist-page  hidden-xs"><a href="' + el.url + '">';
                $(html).appendTo($('.footer-player .album-playlist ul'));
                $('.footer-player').find('li#' + el.id).data('thumb', el.thumb);
                $('.footer-player').find('li#' + el.id).data('name', el.name);
                $('.footer-player').find('li#' + el.id).data('artist', el.artist);
                $('.footer-player').find('li#' + el.id).data('id', el.id);
            }
        };
        var add_track = function (el) {
            if ($('.footer-player').find('li#' + el.id).length)
                return;
            add_to_playlist(el);
            save_track(el);
            click_delete_track_action();
            click_play_track_action();
        };
        var click_delete_track_action = function () {
            $('.footer-player').find('.playlist-delete > a').off("click").click(function (e) {
                e.stopPropagation();
                e.preventDefault();
                remove_track($(this).closest('li').data('id'));
                remove_track_to_player($(this));
            });
        };
        var click_play_track_action = function () {
            $('.footer-player').find('.playlist-play > a').off("click").click(function (e) {
                e.stopPropagation();
                e.preventDefault();
                $(this).closest('li').siblings('li').removeClass('current-playing current-paused');
                if ($(this).closest('li').hasClass("current-playing")) {
                    $(this).closest('li').removeClass("current-playing").addClass('current-paused');
                    pause_track();
                } else {
                    if ($(this).closest('li').hasClass("current-paused")) {
                        $(this).closest('li').removeClass("current-paused").addClass('current-playing');
                        play_track();
                    } else {
                        $(this).closest('li').addClass('current-playing');
                        add_track_to_player($(this));
                        play_track();
                    }
                }
                return false;
            });
        };
        click_delete_track_action();
        click_play_track_action();
        var toggle_play_pause = function (which) {
            if ('play' === which) {
                $('.footer-player').find('.current-paused').removeClass('current-paused').addClass('current-playing');

                if ($('.single-album-playlist li[data-id="' + $('.mejs-playpause-button').data('id') + '"]').length) {
                    $('.single-album-playlist .current-playing').removeClass('current-playing');

                    $('.single-album-playlist li[data-id="' + $('.mejs-playpause-button').data('id') + '"]').addClass('current-playing');
                }
                save_current_play_status(true);
            } else {
                $('.footer-player').find('.current-playing').removeClass('current-playing').addClass('current-paused');
                if ($('.single-album-playlist li[data-id="' + $('.mejs-playpause-button').data('id') + '"]').length) {
                    $('.single-album-playlist .current-playing').removeClass('current-playing');
                }
                save_current_play_status(false);
            }
        };
        var pause_track = function () {
            $('.footer-player').find('audio').each(function () {
                var _player;
                if (typeof (this.player) == 'undefined') {
                    _player = this;
                } else {
                    _player = this.player;
                }
                _player.pause();
            });
            save_current_play_status(false);
        };
        var play_track = function () {
            $('.footer-player').find('audio').each(function () {
                var _player;
                if (typeof (this.player) == 'undefined') {
                    _player = this;
                } else {
                    _player = this.player;
                }
                _player.play();
            });
            save_current_play_status(true);
        };
        var remove_track_to_player = function (track) {
            $(track).closest('li').remove();
            $('.footer-player').find('audio').each(function () {
                var _player;
                if (typeof (this.player) == 'undefined') {
                    _player = this;
                } else {
                    _player = this.player;
                }
                _player.pause();
                _player.setSrc('');
            });
        };
        var add_track_to_player = function (track) {
            var files = [];
            if (track.attr('href')) {
                files.push({
                    src: track.attr('href'),
                    type: 'audio/mpeg'
                });
            }
            var track_id = track.closest('li').attr('id');
            $('.mejs-playpause-button').data('id', track_id);
            if (track.closest('li').data('thumb')) {
                $('.mejs-track-cover').html(track.closest('li').data('thumb'));
            }
            if (track.closest('li').data('name')) {
                $('.mejs-track-title').html(track.closest('li').data('name'));
            }
            if (track.closest('li').data('artist')) {
                $('.mejs-track-artist').html(' - ' + track.closest('li').data('artist'));
            }
            $('.footer-player').find('audio').each(function () {
                var _player;
                if (typeof (this.player) == 'undefined') {
                    _player = this;
                } else {
                    _player = this.player;
                }
                _player.pause();
                _player.setSrc(files);
                _player.load();
            });
            save_playing_song(track_id);
        };
        $('.single-album-playlist').each(function () {
            $(this).find('.noodata-play').on('click', function (e) {
                e.stopPropagation();
                e.preventDefault();
                var _this = $(this).parent();
                if (_this.hasClass("current-playing")) {
                    pause_track();
                    _this.removeClass("current-playing").addClass("current-paused");
                    return;
                }
                if (_this.hasClass("current-paused")) {
                    play_track();
                    _this.removeClass("current-paused").addClass("current-playing");
                    return;
                }
                var _container = _this.closest('.single-album-playlist');
                _this.closest('.single-album-playlist').find('.current-playing').removeClass('current-playing');
                remove_all();
                _this.closest('.single-album-playlist').find('li').each(function () {
                    add_track($(this).data());
                });
                _this.addClass('current-playing');
                var _current_track = $('.footer-player').find('li#' + _this.data('id'));
                var _current_track_title = $('.footer-player').find('small#' + _this.data('id'));
                _current_track.addClass('current-playing');
                add_track_to_player(_current_track.find('.playlist-play > a'));
                play_track();
                return false;
            });
        });
        var play_list_btn_action = function () {
            $('.add-to-playlist-btn').each(function () {
                $(this).on('click', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _songs = $(this).data('songs');
                    if (_songs) {
                        remove_all();
                        $.each(_songs, function (i, song) {
                            add_track(song);
                        });
                        add_track_to_player($('.footer-player').find('.album-playlist-item').first().addClass('current-playing').find('.playlist-play > a'));
                        play_track();
                    }
                });
            });
        };
        play_list_btn_action();
        $(document).bind('album-list-changed', function () {
            play_list_btn_action();
        });
        var player_settings = {};
        player_settings.features = ['playpause', 'progress', 'volume'];
        player_settings.audioWidth = "100%";
        player_settings.audioHeight = 76;
        if (typeof (_wpmejsSettings) !== 'undefined') {
            player_settings.pluginPath = _wpmejsSettings.pluginPath;
        }
        player_settings.success = function (media) {
            var _volume_percent = Math.floor(media.volume * 100);
            $('.mejs-horizontal-volume-slider').append('<span class="mejs-volumn-percent hidden-xs">' + _volume_percent + '%</span>');
            media.addEventListener('volumechange', function (e) {
                var _volume_percent = Math.floor(media.volume * 100);
                $('.mejs-horizontal-volume-slider').find('.mejs-volumn-percent').text(_volume_percent + '%');
            });
            media.addEventListener('ended', function () {
                var current_playing = $('.footer-player').find('.current-playing').length ? $('.footer-player').find('.current-playing') : $('.footer-player').find('.current-paused');
                var next_track = current_playing.length ? current_playing.next('.album-playlist-item') : [];
                if (next_track.length) {
                    next_track.find('.playlist-play > a').trigger('click');
                } else {
                    if (current_playing.get(0) == $('.footer-player').find('.album-playlist-item').last().get(0)) {
                        $('.footer-player').find('li.album-playlist-item').first().find('.playlist-play > a').trigger('click');
                    }
                }
            });
            media.addEventListener('timeupdate', function (e) {
                save_current_time(media.currentTime);
            }, false);
            media.addEventListener('paused', function () {
                toggle_play_pause('pse');
            });
            media.addEventListener('pause', function () {
                toggle_play_pause('pse');
            });
            media.addEventListener('play', function () {
                toggle_play_pause('play');
            });
            media.addEventListener('playing', function () {
                toggle_play_pause('play');
            });
            var controls = $(media).parent('.mejs-mediaelement').siblings('.mejs-controls');
            var play_btn = controls.children('.mejs-playpause-button');
            play_btn.children('button').remove();
            play_btn.append('<i class="fa fa-play" ></i>');
            var volume_btn = controls.children('.mejs-volume-button');
            volume_btn.children('button').remove();
            volume_btn.append('<i class="fas fa-volume-up mt-3 volume-icon" ></i>');
            var track = $('<div class="mejs-track-container hidden-xs"></div>');
            track.append('<a href="#" class="mejs-track-cover"><img src="../public/images/media-player/no-track-image.png"/></a><a hef="#" class="mejs-track-title"></a><span class="mejs-track-artist"></span>');
            track.appendTo(controls);
            var mejs_left = $('<div class="mejs-left-controls"></div>');
            mejs_left.appendTo(controls);
            var mejs_navigation = $('<div class="mejs-navigation-controls"></div>');
            controls.prepend(mejs_navigation);
            var prev_btn = $('<div class="mejs-button mejs-prev-button mejs-prev"></div>');
            prev_btn.click(function () {
                var current_playing = $('.footer-player').find('.current-playing').length ? $('.footer-player').find('.current-playing') : $('.footer-player').find('.current-paused');
                var prev_track = current_playing.length ? current_playing.prev('.album-playlist-item') : [];
                if (prev_track.length) {
                    prev_track.find('.playlist-play > a').trigger('click');
                } else {
                    if (current_playing.get(0) == $('.footer-player').find('.album-playlist-item').first().get(0)) {
                        $('.footer-player').find('li.album-playlist-item').last().find('.playlist-play > a').trigger('click');
                    }
                }
                return false;
            });
            prev_btn.append('<i class="fa fa-step-backward"></i>');
            prev_btn.appendTo(mejs_navigation);
            var next_btn = $('<div class="mejs-button mejs-next-button mejs-next"></div>');
            next_btn.click(function () {
                var current_playing = $('.footer-player').find('.current-playing').length ? $('.footer-player').find('.current-playing') : $('.footer-player').find('.current-paused');
                var next_track = current_playing.length ? current_playing.next('.album-playlist-item') : [];
                if (next_track.length) {
                    next_track.find('.playlist-play > a').trigger('click');
                } else {
                    if (current_playing.get(0) == $('.footer-player').find('.album-playlist-item').last().get(0)) {
                        $('.footer-player').find('li.album-playlist-item').first().find('.playlist-play > a').trigger('click');
                    }
                }
                return false;
            });
            next_btn.append('<i class="fa fa-step-forward"></i>');
            next_btn.appendTo(mejs_navigation);
            var queue_btn = $('<div class="mejs-button mejs-queue-button mejs-queue"></div>');
            queue_btn.click(function () {
                $(this).toggleClass('queue-active');
                $(this).closest('.footer-player').find('.album-playlist').toggle();
                return false;
            });
            queue_btn.append('<i class="fa fa-bars"></i>');
            queue_btn.appendTo(mejs_left);
            var current_song = get_playing_song();
            if (current_song !== false) {
                if ($('.footer-player').find('li#' + current_song).length) {
                    $('.footer-player').find('.current-playing').removeClass('current-playing');
                    $('.footer-player').find('.current-paused').removeClass('current-paused');
                    $('.footer-player').find('li#' + current_song + ' ').addClass('current-paused');
                    add_track_to_player($('.footer-player').find('li#' + current_song + '  .playlist-play > a'));
                    if ($.cookie('playing-data')) {
                        var playing = $.parseJSON($.cookie('playing-data'));
                        if (playing.status) play_track();
                        media.setCurrentTime(parseFloat(playing.time));
                    }
                }
            }
        };
        $('.album-audio-embed').mediaelementplayer(player_settings);
        if (typeof $.cookie('noo-playlist') === 'undefined') {
            $.cookie('noo-playlist', "", {
                expires: 360 * 10,
                path: "/"
            });
            var _songs = $.parseJSON("");
            if (_songs) {
                $.each(_songs, function (i, song) {
                    add_track(song);
                });
                add_track_to_player($('.footer-player').find('.album-playlist-item').first().find('.playlist-play > a'));
                play_track();
            }
        }
    });
})(jQuery);
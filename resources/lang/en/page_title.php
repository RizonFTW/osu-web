<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'admin' => [
        '_' => 'admin',
    ],
    'admin_forum' => [
        '_' => 'admin',
    ],
    'admin_store' => [
        '_' => 'admin',
    ],
    'error' => [
        'error' => [
            '404' => 'missing',
            '403' => 'forbidden',
            '401' => 'unauthorized',
            '405' => 'missing',
            '500' => 'something broke',
            '503' => 'maintenance',
        ],
    ],
    'forum' => [
        '_' => 'forum',
        'topic_watches_controller' => [
            'index' => 'dashboard',
        ],
    ],
    'main' => [
        'account_controller' => [
            'edit' => 'dashboard',
            'verify_link' => 'account verification',
        ],
        'artists_controller' => [
            '_' => 'featured artists',
        ],
        'beatmap_discussion_posts_controller' => [
            '_' => 'beatmap discussion posts',
        ],
        'beatmap_discussions_controller' => [
            '_' => 'beatmap discussions',
        ],
        'beatmap_packs_controller' => [
            '_' => 'beatmap packs',
        ],
        'beatmapset_discussion_votes_controller' => [
            '_' => 'beatmap discussion votes',
        ],
        'beatmapset_events_controller' => [
            '_' => 'beatmap history',
        ],
        'beatmapset_watches_controller' => [
            'index' => 'dashboard',
        ],
        'beatmapsets_controller' => [
            'discussion' => 'beatmap discussion',
            'index' => 'beatmap listing',
            'show' => 'beatmap info',
        ],
        'changelog_controller' => [
            '_' => 'changelog',
        ],
        'chat_controller' => [
            '_' => 'chat',
        ],
        'comments_controller' => [
            '_' => 'comments',
        ],
        'contests_controller' => [
            '_' => 'contests',
        ],
        'friends_controller' => [
            'index' => 'dashboard',
        ],
        'groups_controller' => [
            'show' => 'groups',
        ],
        'home_controller' => [
            'get_download' => 'download',
            'index' => 'dashboard',
            'search' => 'search',
            'support_the_game' => 'support the game',
            'testflight' => 'testflight',
        ],
        'legal_controller' => [
            '_' => 'information',
        ],
        'livestreams_controller' => [
            '_' => 'live streams',
        ],
        'matches_controller' => [
            '_' => 'matches',
        ],
        'news_controller' => [
            '_' => 'news',
        ],
        'notifications_controller' => [
            '_' => 'notifications history',
        ],
        'ranking_controller' => [
            '_' => 'ranking',
        ],
        'store_controller' => [
            '_' => 'osu!store',
        ],
        'tournaments_controller' => [
            '_' => 'tournaments',
        ],
        'users_controller' => [
            '_' => 'player info',
            'disabled' => 'notice',
        ],
        'wiki_controller' => [
            'show' => 'knowledge base',
        ],
    ],
    'store' => [
        '_' => 'osu!store',
    ],
    'users' => [
        'modding_history_controller' => [
            '_' => 'modder info',
        ],
    ],
];

<?php

// Copyright (C) 2015-2018 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// English text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'Type comment here...',
	'reply-form'		=> 'Type reply here...',
	'comment-formatting'	=> 'Formatting',
	'accepted-format'	=> 'Accepted %s',
	'accepted-html'		=> '&lt;b&gt;, &lt;strong&gt;, &lt;u&gt;, &lt;i&gt;, &lt;em&gt;, &lt;s&gt;, &lt;big&gt;, &lt;small&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; escapes HTML, URLs automagically become links, and [img]URL here[/img] will display an external image.',
	'accepted-markdown'	=> '**Bold**, _underline_, *italic*, ~~strikethrough~~, `highlight`, ```code``` escapes HTML. HTML and Markdown may be used together in your comment.',
	'post-button'		=> 'Post Comment',
	'login'			=> 'Login',
	'login-tip'		=> 'Login (optional)',
	'logout'		=> 'Logout',
	'be-first-name'		=> 'No comments yet.',
	'pending-name'		=> 'Pending...',
	'deleted-name'		=> 'Deleted...',
	'error-name'		=> 'Error...',
	'be-first-note'		=> 'Be the first to comment!',
	'pending-note'		=> 'This comment is pending approval.',
	'deleted-note'		=> 'This comment has been deleted.',
	'error-note'		=> 'Something went wrong. Could not retrieve this comment.',
	'options'		=> 'Options',
	'cancel'		=> 'Cancel',
	'reply-to-comment'	=> 'Reply to comment',
	'edit-your-comment'	=> 'Edit your comment',
	'optional'		=> 'Optional',
	'required'		=> 'Required',
	'name'			=> 'Name',
	'name-tip'		=> 'Name (%s)',
	'password'		=> 'Password',
	'password-tip'		=> 'Password (%s, allows you to edit or delete this comment)',
	'confirm-password'	=> 'Confirm Password',
	'email'			=> 'E-mail Address',
	'email-tip'		=> 'E-mail Address (%s, for e-mail notifications)',
	'website'		=> 'Website',
	'website-tip'		=> 'Website (%s)',
	'logged-in'		=> 'You have been successfully logged in!',
	'logged-out'		=> 'You have been successfully logged out!',
	'comment-needed'	=> 'You failed to enter a proper comment. Please try again.',
	'reply-needed'		=> 'You failed to enter a proper reply. Please try again.',
	'field-needed'		=> 'The "%s" field is required.',
	'post-fail'		=> 'Failure! You lack sufficient permission.',
	'comment-deleted'	=> 'Comment Deleted!',
	'post-reply'		=> 'Post Reply',
	'delete'		=> 'Delete',
	'permanently-delete'	=> 'Permanently Delete',
	'subscribe'		=> 'Notify me of replies',
	'subscribe-tip'		=> 'Subscribe to e-mail notifications',
	'edit-comment'		=> 'Edit comment',
	'status'		=> 'Status',
	'status-approved'	=> 'Approved',
	'status-pending'	=> 'Pending approval',
	'status-deleted'	=> 'Marked deleted',
	'save'			=> 'Save',
	'no-email-warning'	=> 'You will not receive notification of replies to your comment without supplying an e-mail.',
	'invalid-email'		=> 'The e-mail address you entered is invalid.',
	'delete-comment'	=> 'Are you sure you want to delete this comment?',
	'post-comment-on'	=> array ('Post a Comment', 'Post a comment on "%s"'),
	'popular-comments'	=> array ('Most Popular Comment', 'Most Popular Comments'),
	'showing-comments'	=> array ('Showing %d Comment', 'Showing %d Comments'),
	'count-link'		=> array ('%d Comment', '%d Comments'),
	'count-replies'		=> array ('%d counting reply', '%d counting replies'),
	'sort'			=> 'Sort',
	'sort-ascending'	=> 'In order',
	'sort-descending'	=> 'In reverse order',
	'sort-by-date'		=> 'Newest first',
	'sort-by-likes'		=> 'By likes',
	'sort-by-replies'	=> 'By replies',
	'sort-by-discussion'	=> 'By discussion',
	'sort-by-popularity'	=> 'By popularity',
	'sort-by-name'		=> 'By commenter',
	'sort-threads'		=> 'Threads',
	'thread'		=> 'In reply to %s',
	'thread-tip'		=> 'Jump to top of thread',
	'comments'		=> 'Comments',
	'replies'		=> 'Replies',
	'edit'			=> 'Edit',
	'reply'			=> 'Reply',
	'like'			=> array ('Like', 'Likes'),
	'liked'			=> 'Liked',
	'unlike'		=> 'Unlike',
	'like-comment'		=> '\'Like\' this comment',
	'liked-comment'		=> 'Unlike this comment',
	'dislike'		=> array ('Dislike', 'Dislikes'),
	'disliked'		=> 'Disliked',
	'dislike-comment'	=> '\'Dislike\' this comment',
	'disliked-comment'	=> 'You \'Disliked\' this comment',
	'commenter-tip'		=> 'You will not be notified via e-mail',
	'subscribed-tip'	=> 'will be notified via e-mail',
	'unsubscribed-tip'	=> 'is not subscribed to e-mail notifications',
	'show-other-comments'	=> array ('Show %d Other Comment', 'Show %d Other Comments'),
	'show-number-comments'	=> array ('Show %d Comment', 'Show %d Comments'),
	'date-time'		=> '%s \a\t %s',
	'date-years'		=> array ('%d year ago', '%d years ago'),
	'date-months'		=> array ('%d month ago', '%d months ago'),
	'date-days'		=> array ('%d day ago', '%d days ago'),
	'date-today'		=> '%s today',
	'date-day-names'	=> array ('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
	'date-month-names'	=> array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
	'untitled'		=> 'Untitled',
	'external-image-tip'	=> 'Click to view external image',
	'loading'		=> 'Loading...',
	'click-to-close'	=> 'Click to close',
	'hashover-comments'	=> 'HashOver Comments',
	'rss-feed'		=> 'RSS Feed',
	'source-code'		=> 'Source Code',

	'source-code-sub'	=> 'HashOver server-side source code viewer',
	'type'			=> 'Type',
	'path'			=> 'Path',
	'view-as'		=> 'View As',
	'text'			=> 'Text',
	'download'		=> 'Download',

	'documentation'		=> 'Documentation',
	'coming-soon'		=> 'Coming soon',
	'example'		=> 'Example',
	'back'			=> 'Back',
	'value'			=> 'Value',

	'successful-save'	=> 'Successfully saved!',
	'failed-to-save'	=> 'Failed to save! Check permissions.',
	'permissions-info'	=> 'Give "%s" permissions 0755 and ownership to the "%s" user.',

	'admin'			=> 'Admin',
	'moderation'		=> 'Moderation',
	'block-ip-addresses'	=> 'Block IP Addresses',
	'filter-url-queries'	=> 'Filter URL Queries',
	'check-for-updates'	=> 'Check for Updates',
	'settings'		=> 'Settings',

	'admin-required'	=> 'You must be logged as admin',

	'blocklist-title'	=> 'IP Address Blocklist',
	'blocklist-sub'		=> 'Block specific IP addresses',
	'blocklist-ip-tip'	=> 'IP Address or blank to remove',

	'url-queries-title'	=> 'Ignored URL Queries',
	'url-queries-sub'	=> 'Filter which URL queries should be ignored',
	'url-queries-name-tip'	=> 'Query name or blank to remove',
	'url-queries-value-tip'	=> 'Query value or blank for any value',

	'settings-sub'		=> 'Change various settings',
	'moderation-sub'	=> 'Post, edit, approve, and delete comments',

	'setting-language'			=> 'Language',
	'setting-theme'				=> 'Theme',
	'setting-uses-moderation'		=> 'Comments posted by normal users require moderation',
	'setting-pends-user-edits'		=> 'Comments edited by normal users require additional moderation',
	'setting-data-format'			=> 'Comment data format',
	'setting-default-name'			=> 'Default commenter name',
	'setting-allows-images'			=> 'Allow display of images in comments',
	'setting-allows-login'			=> 'Allow users to login',
	'setting-allows-likes'			=> 'Allow users to like comments',
	'setting-allows-dislikes'		=> 'Allow users to dislike comments',
	'setting-uses-ajax'			=> 'Enable asynchronous JavaScript features',
	'setting-collapses-interface'		=> 'Collapse entire HashOver user interface',
	'setting-collapses-comments'		=> 'Collapse a configurable number of comments',
	'setting-collapse-limit'		=> 'Number of comments to collapse',
	'setting-reply-mode'			=> 'Display mode of comment threads',
	'setting-stream-depth'			=> 'Number of reply indentions before stream is flattened',
	'setting-popularity-threshold'		=> 'Net number of likes a comment needs to be popular',
	'setting-popularity-limit'		=> 'Number of popular comments to display',
	'setting-uses-markdown'			=> 'Enable Markdown support',
	'setting-server-timezone'		=> 'Server timezone',
	'setting-uses-user-timezone'		=> 'Display dates/times in user\'s timezone (JavaScript-mode)',
	'setting-uses-short-dates'		=> 'Enable shorter dates/times (example "1 day ago")',
	'setting-time-format'			=> 'Time format, use "H:i" for 24-hour format',
	'setting-date-format'			=> 'Date format',
	'setting-displays-title'		=> 'Enable display of page title',
	'setting-form-position'			=> 'Position for primary comment form',
	'setting-uses-auto-login'		=> 'Automatically log users in when they post comments',
	'setting-shows-reply-count'		=> 'Display reply count separately from total count',
	'setting-count-includes-deleted'	=> 'Include deleted comments in comment counts',
	'setting-icon-mode'			=> 'Avatar icon display mode',
	'setting-icon-size'			=> 'Avatar icon size',
	'setting-image-format'			=> 'Format for icons and other images',
	'setting-uses-labels'			=> 'Display labels above inputs',
	'setting-uses-cancel-buttons'		=> 'Whether forms have cancel buttons',
	'setting-appends-css'			=> 'Automatically add HashOver CSS to page',
	'setting-appends-rss'			=> 'Add HashOver RSS Feed links to page',
	'setting-login-method'			=> 'User login system',
	'setting-sets-cookies'			=> 'Enable cookies',
	'setting-secure-cookies'		=> 'Use secure HTTPS-only cookies',
	'setting-stores-ip-address'		=> 'Enable storage of user IP addresses',
	'setting-subscribes-user'		=> 'Subscribe the user to e-mail notifications by default',
	'setting-allows-user-replies'		=> 'Set user e-mail as "Reply-To" in reply notifications',
	'setting-noreply-email'			=> 'E-mail address used when no e-mail is given',
	'setting-spam-batabase'			=> 'SPAM database location',
	'setting-spam-check-modes'		=> 'Modes to perform SPAM check under',
	'setting-gravatar-force'		=> 'Use themed Gravatar images instead of avatars',
	'setting-gravatar-default'		=> 'Default Gravatar theme to use',
	'setting-minifies-javascript'		=> 'Enable JavaScript minification',
	'setting-minify-level'			=> 'JavaScript minification level',
	'setting-allow-local-metadata'		=> 'Allow page metadata to be updated from localhost'
);

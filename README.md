# Social Media

## Examples for Facebook

### How publishing a post to Facebook should work.

```php
/** @var FacebookPostPublish $post */
$post = new FacebookPostPublish(
    $title,
    $description,
    $url
);

/** @var FacebookService $service */
$service = new FacebookService();

// dispatch new Event
$this->get('event_dispatcher')->dispatch(
    SocialMediaEvents::POST_SUBMITTED,
    SocialMediaPublishEvent(
        $post,
        $service
    )
);
```

### How unpublishing a post from facebook should work.

```php
// facebook post id
$identifier = '126577990374899_1489744286461266';

/** @var FacebookPostUnpublish $post */
$post = new FacebookPostUnpublish(
    $identifier
);

/** @var FacebookService $service */
$service = new FacebookService();

// dispatch new Event
$this->get('event_dispatcher')->dispatch(
    SocialMediaEvents::POST_DELETED,
    SocialMediaUnpublishEvent(
        $post,
        $service
    )
);
```

### How publishing an album to Facebook should work.

```php
/** @var FacebookAlbumPublish $album */
$album = new FacebookAlbumPublish(
    $title,
    $description,
    $images
);

/** @var FacebookService $service */
$service = new FacebookService();

// dispatch new Event
$this->get('event_dispatcher')->dispatch(
    SocialMediaEvents::ALBUM_SUBMITTED,
    SocialMediaPublishEvent(
        $album,
        $service
    )
);
```

### How unpublishing an album to Facebook should work.

> Note: don't know if using an album identifier could work, I guess I should add all identifiers of the individual images.

```php
// facebook album id
$identifier = '126577990374899_1489744286461266';

/** @var FacebookAlbumUnpublish $album */
$album = new FacebookAlbumUnpublish(
    $identifier
);

/** @var FacebookService $service */
$service = new FacebookService();

// dispatch new Event
$this->get('event_dispatcher')->dispatch(
    SocialMediaEvents::ALBUM_DELETED,
    SocialMediaUnpublishEvent(
        $album,
        $service
    )
);
```

## How a Fork CMS Module should use the SocialMedia library.

> Example: blog module

* In Add.php or Edit.php, we should **dispatch Event**
* We should add an EventListener per SocialMediaPlatform, which uses code form the above examples.

**What about a module using multiple social media platforms**

* We should create an Event Listener for every separate social media platform, but for the same event. Because titles or descriptions or ... should be different to every platform.

**I want my module to save the identifiers in a timeline**

* We should use (create) an extra level, which fetches all Publish/Unpublish Events and checks the database for more information.


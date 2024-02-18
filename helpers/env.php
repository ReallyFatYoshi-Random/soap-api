<?php

/**
 * Returns the env.
 * 
 * @param string $key     Environment variable value it should return, if it exists.
 * @param mixed  $default This is the value it will return if the environment variable doesn't exist.
 * 
 * @return mixed
 */
function env(string $key, mixed $default = null): mixed
{
    return $_ENV[$key] ?? $default;
}

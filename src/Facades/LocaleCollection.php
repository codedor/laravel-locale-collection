<?php

namespace Codedor\LocaleCollection\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Codedor\LocaleCollection\Locale|null getCurrent()
 * @method static \Codedor\LocaleCollection\Locale fallback()
 * @method static \self setCurrent(string $currentLocale, string $url)
 * @method static bool isAllowed(string $localeToFind)
 * @method static \Codedor\LocaleCollection\Locale|null firstLocale(string $localeToFind)
 * @method static \Codedor\LocaleCollection\Locale|null firstLocaleWithUrl(string $localeToFind, string $url)
 * @method static void registerRoutes(Closure|array|string $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection range(int $from, int $to)
 * @method static array all()
 * @method static \Illuminate\Support\LazyCollection lazy()
 * @method static float|int|null avg(mixed $callback = null)
 * @method static float|int|null median(string|array|null $key = null)
 * @method static array|null mode(string|array|null $key = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection collapse()
 * @method static bool contains(callable|mixed|string $key, mixed $operator = null, mixed $value = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection containsStrict(callable|mixed $key, mixed $value = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection doesntContain(mixed $key, mixed $operator = null, mixed $value = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection crossJoin(\Illuminate\Contracts\Support\Arrayable|iterable ...$lists)
 * @method static \Codedor\LocaleCollection\LocaleCollection diff(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static \Codedor\LocaleCollection\LocaleCollection diffUsing(\Illuminate\Contracts\Support\Arrayable|iterable $items, callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection diffAssoc(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static \Codedor\LocaleCollection\LocaleCollection diffAssocUsing(\Illuminate\Contracts\Support\Arrayable|iterable $items, callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection diffKeys(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static \Codedor\LocaleCollection\LocaleCollection diffKeysUsing(\Illuminate\Contracts\Support\Arrayable|iterable $items, callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection duplicates(callable|string|null $callback = null, bool $strict = false)
 * @method static \Codedor\LocaleCollection\LocaleCollection duplicatesStrict(callable|string|null $callback = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection except(\Illuminate\Support\Enumerable|array $keys)
 * @method static \Codedor\LocaleCollection\LocaleCollection filter(callable|null $callback = null)
 * @method static \Codedor\LocaleCollection\Locale first(callable|null $callback = null, mixed $default = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection flatten(int $depth = unknown)
 * @method static \Codedor\LocaleCollection\LocaleCollection flip()
 * @method static \Codedor\LocaleCollection\LocaleCollection forget(mixed|array $keys)
 * @method static \Codedor\LocaleCollection\Locale get(void $key, mixed $default = null)
 * @method static mixed getOrPut(mixed $key, mixed $value)
 * @method static \Codedor\LocaleCollection\LocaleCollection groupBy(callable|array|string $groupBy, bool $preserveKeys = false)
 * @method static \Codedor\LocaleCollection\LocaleCollection keyBy(callable|array|string $keyBy)
 * @method static bool has(mixed|array $key)
 * @method static bool hasAny(mixed $key)
 * @method static string implode(callable|string $value, string|null $glue = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection intersect(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static \Codedor\LocaleCollection\LocaleCollection intersectByKeys(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static bool isEmpty()
 * @method static bool containsOneItem()
 * @method static string join(string $glue, string $finalGlue = '')
 * @method static \Codedor\LocaleCollection\LocaleCollection keys()
 * @method static \Codedor\LocaleCollection\Locale last(callable|null $callback = null, mixed $default = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection pluck(string|int|array $value, string|null $key = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection map(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection mapToDictionary(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection mapWithKeys(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection merge(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static \Codedor\LocaleCollection\LocaleCollection mergeRecursive(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static \Codedor\LocaleCollection\LocaleCollection combine(\Illuminate\Contracts\Support\Arrayable|iterable $values)
 * @method static \Codedor\LocaleCollection\LocaleCollection union(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static \Codedor\LocaleCollection\LocaleCollection nth(int $step, int $offset = 0)
 * @method static \Codedor\LocaleCollection\LocaleCollection only(\Illuminate\Support\Enumerable|array|string $keys)
 * @method static \Codedor\LocaleCollection\LocaleCollection|mixed|null pop(int $count = 1)
 * @method static \Codedor\LocaleCollection\LocaleCollection prepend(void $value, void $key = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection push(void ...$values)
 * @method static \Codedor\LocaleCollection\LocaleCollection concat(iterable $source)
 * @method static \Codedor\LocaleCollection\Locale pull(void $key, mixed $default = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection put(void $key, void $value)
 * @method static \Codedor\LocaleCollection\LocaleCollection|int random(callable|int|null $number = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection replace(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static \Codedor\LocaleCollection\LocaleCollection replaceRecursive(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static \Codedor\LocaleCollection\LocaleCollection reverse()
 * @method static mixed search(mixed $value, bool $strict = false)
 * @method static \Codedor\LocaleCollection\LocaleCollection|mixed|null shift(int $count = 1)
 * @method static \Codedor\LocaleCollection\LocaleCollection shuffle(int|null $seed = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection sliding(int $size = 2, int $step = 1)
 * @method static \Codedor\LocaleCollection\LocaleCollection skip(int $count)
 * @method static \Codedor\LocaleCollection\LocaleCollection skipUntil(mixed|callable $value)
 * @method static \Codedor\LocaleCollection\LocaleCollection skipWhile(mixed|callable $value)
 * @method static \Codedor\LocaleCollection\LocaleCollection slice(int $offset, int|null $length = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection split(int $numberOfGroups)
 * @method static \Codedor\LocaleCollection\LocaleCollection splitIn(int $numberOfGroups)
 * @method static void sole(callable|string $key = null, mixed $operator = null, mixed $value = null)
 * @method static void firstOrFail(callable|string $key = null, mixed $operator = null, mixed $value = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection chunk(int $size)
 * @method static \Codedor\LocaleCollection\LocaleCollection chunkWhile(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection sort(callable|null|int $callback = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection sortDesc(int $options = 0)
 * @method static \Codedor\LocaleCollection\LocaleCollection sortBy(array|callable|string $callback, int $options = 0, bool $descending = false)
 * @method static \Codedor\LocaleCollection\LocaleCollection sortByDesc(array|callable|string $callback, int $options = 0)
 * @method static \Codedor\LocaleCollection\LocaleCollection sortKeys(int $options = 0, bool $descending = false)
 * @method static \Codedor\LocaleCollection\LocaleCollection sortKeysDesc(int $options = 0)
 * @method static \Codedor\LocaleCollection\LocaleCollection sortKeysUsing(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection splice(int $offset, int|null $length = null, array $replacement = [])
 * @method static \Codedor\LocaleCollection\LocaleCollection take(int $limit)
 * @method static \Codedor\LocaleCollection\LocaleCollection takeUntil(mixed|callable $value)
 * @method static \Codedor\LocaleCollection\LocaleCollection takeWhile(mixed|callable $value)
 * @method static \Codedor\LocaleCollection\LocaleCollection transform(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection undot()
 * @method static \Codedor\LocaleCollection\LocaleCollection unique(callable|string|null $key = null, bool $strict = false)
 * @method static \Codedor\LocaleCollection\LocaleCollection values()
 * @method static \Codedor\LocaleCollection\LocaleCollection zip(\Illuminate\Contracts\Support\Arrayable|iterable $items)
 * @method static \Codedor\LocaleCollection\LocaleCollection pad(int $size, void $value)
 * @method static \ArrayIterator getIterator()
 * @method static int count()
 * @method static \Codedor\LocaleCollection\LocaleCollection countBy(callable|string|null $countBy = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection add(void $item)
 * @method static \Illuminate\Support\Collection toBase()
 * @method static \Codedor\LocaleCollection\LocaleCollection make(\Illuminate\Contracts\Support\Arrayable|iterable|null $items = [])
 * @method static \Codedor\LocaleCollection\LocaleCollection wrap(iterable $value)
 * @method static array unwrap(array|\Codedor\LocaleCollection\LocaleCollection $value)
 * @method static \Codedor\LocaleCollection\LocaleCollection empty()
 * @method static \Codedor\LocaleCollection\LocaleCollection times(int $number, callable|null $callback = null)
 * @method static float|int|null average(mixed $callback = null)
 * @method static bool some(callable|mixed|string $key, mixed $operator = null, mixed $value = null)
 * @method static never dd(mixed ...$args)
 * @method static \Codedor\LocaleCollection\LocaleCollection dump()
 * @method static \Codedor\LocaleCollection\LocaleCollection each(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection eachSpread(callable $callback)
 * @method static bool every(callable|mixed|string $key, mixed $operator = null, mixed $value = null)
 * @method static \Codedor\LocaleCollection\Locale|null firstWhere(callable|string $key, mixed $operator = null, mixed $value = null)
 * @method static mixed value(string $key, mixed $default = null)
 * @method static bool isNotEmpty()
 * @method static \Codedor\LocaleCollection\LocaleCollection mapSpread(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection mapToGroups(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection flatMap(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection mapInto(string $class)
 * @method static mixed min(callable|string|null $callback = null)
 * @method static mixed max(callable|string|null $callback = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection forPage(int $page, int $perPage)
 * @method static \Codedor\LocaleCollection\LocaleCollection partition(callable|mixed|string $key, mixed $operator = null, mixed $value = null)
 * @method static mixed sum(callable|string|null $callback = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection|mixed whenEmpty(callable $callback, callable|null $default = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection|mixed whenNotEmpty(callable $callback, callable|null $default = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection|mixed unlessEmpty(callable $callback, callable|null $default = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection|mixed unlessNotEmpty(callable $callback, callable|null $default = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection where(callable|string $key, mixed $operator = null, mixed $value = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection whereNull(string|null $key = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection whereNotNull(string|null $key = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection whereStrict(string $key, mixed $value)
 * @method static \Codedor\LocaleCollection\LocaleCollection whereIn(string $key, \Illuminate\Contracts\Support\Arrayable|iterable $values, bool $strict = false)
 * @method static \Codedor\LocaleCollection\LocaleCollection whereInStrict(string $key, \Illuminate\Contracts\Support\Arrayable|iterable $values)
 * @method static \Codedor\LocaleCollection\LocaleCollection whereBetween(string $key, \Illuminate\Contracts\Support\Arrayable|iterable $values)
 * @method static \Codedor\LocaleCollection\LocaleCollection whereNotBetween(string $key, \Illuminate\Contracts\Support\Arrayable|iterable $values)
 * @method static \Codedor\LocaleCollection\LocaleCollection whereNotIn(string $key, \Illuminate\Contracts\Support\Arrayable|iterable $values, bool $strict = false)
 * @method static \Codedor\LocaleCollection\LocaleCollection whereNotInStrict(string $key, \Illuminate\Contracts\Support\Arrayable|iterable $values)
 * @method static \Codedor\LocaleCollection\LocaleCollection whereInstanceOf(string|array $type)
 * @method static void pipe(callable $callback)
 * @method static mixed pipeInto(string $class)
 * @method static mixed pipeThrough(array $callbacks)
 * @method static void reduce(callable $callback, void $initial = null)
 * @method static array reduceSpread(callable $callback, mixed ...$initial)
 * @method static \Codedor\LocaleCollection\LocaleCollection reject(callable|bool|mixed $callback = true)
 * @method static \Codedor\LocaleCollection\LocaleCollection tap(callable $callback)
 * @method static \Codedor\LocaleCollection\LocaleCollection uniqueStrict(callable|string|null $key = null)
 * @method static \Illuminate\Support\Collection collect()
 * @method static array toArray()
 * @method static array jsonSerialize()
 * @method static string toJson(int $options = 0)
 * @method static \CachingIterator getCachingIterator(int $flags = 1)
 * @method static \Codedor\LocaleCollection\LocaleCollection escapeWhenCastingToString(bool $escape = true)
 * @method static void proxy(string $method)
 * @method static \Codedor\LocaleCollection\LocaleCollection|mixed when(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 * @method static \Codedor\LocaleCollection\LocaleCollection|mixed unless(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 *
 * @see \Codedor\LocaleCollection\LocaleCollection
 */
class LocaleCollection extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Codedor\LocaleCollection\LocaleCollection::class;
    }
}
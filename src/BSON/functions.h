/*
 * Copyright 2014-2017 MongoDB, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

#ifndef PHONGO_BSON_FUNCTIONS_H
#define PHONGO_BSON_FUNCTIONS_H

#include <php.h>

PHP_FUNCTION(MongoDB_BSON_fromPHP);
PHP_FUNCTION(MongoDB_BSON_toPHP);

PHP_FUNCTION(MongoDB_BSON_fromJSON);
PHP_FUNCTION(MongoDB_BSON_toJSON);
PHP_FUNCTION(MongoDB_BSON_toCanonicalJSON);
PHP_FUNCTION(MongoDB_BSON_toRelaxedJSON);

#endif /* PHONGO_BSON_FUNCTIONS_H */


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: noet sw=4 ts=4 fdm=marker
 * vim<600: noet sw=4 ts=4
 */

"use strict";
/**
 * Copyright 2023 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
Object.defineProperty(exports, "__esModule", { value: true });
exports.MappedLocator = void 0;
const rxjs_js_1 = require("../../../third_party/rxjs/rxjs.js");
const locators_js_1 = require("./locators.js");
/**
 * @internal
 */
class MappedLocator extends locators_js_1.DelegatedLocator {
    #mapper;
    constructor(base, mapper) {
        super(base);
        this.#mapper = mapper;
    }
    _clone() {
        return new MappedLocator(this.delegate.clone(), this.#mapper).copyOptions(this);
    }
    _wait(options) {
        return this.delegate._wait(options).pipe((0, rxjs_js_1.mergeMap)(handle => {
            return (0, rxjs_js_1.from)(Promise.resolve(this.#mapper(handle, options?.signal)));
        }));
    }
}
exports.MappedLocator = MappedLocator;
//# sourceMappingURL=MappedLocator.js.map